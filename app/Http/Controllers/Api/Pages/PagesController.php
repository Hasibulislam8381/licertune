<?php

namespace App\Http\Controllers\Api\Pages;

use App\Http\Controllers\Controller;
use App\Models\Cms;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Fetch all CMS pages
     */
    public function allCms()
    {
        $cmsList = Cms::with('translations')->get()->map(function ($cms) {
            $translations = [];
            foreach ($cms->translations as $t) {
                $translations[$t->language][$t->field] = $t->value;
            }

            return [
                'id' => $cms->id,
                'page_name' => $cms->page_name,
                'slug' => $cms->slug,
                'section_name' => $cms->section_name,
                'image' => $cms->image ? asset($cms->image) : null,
                'bg_image' => $cms->bg_image ? asset($cms->bg_image) : null,
                'btn_text' => $cms->btn_text,
                'btn_url' => $cms->btn_url,
                'status' => $cms->status,
                'translations' => $translations
            ];
        });

        return response()->json([
            'success' => true,
            'data' => $cmsList
        ]);
    }

    /**
     * Fetch a single CMS page by slug
     */
    // public function getByPageName(Request $request, $slug)
    // {
    //     try {
    //         $cmsSections = Cms::with('translations')->where('slug', $slug)->get();

    //         if ($cmsSections->isEmpty()) {
    //             throw new \Exception('CMS section not found.');
    //         }

    //         $defaultLang = 'en';
    //         $lang = $request->get('language', $defaultLang);

    //         $data = $cmsSections->map(function ($cms) use ($lang) {
    //             $translations = [];
    //             foreach ($cms->translations as $t) {
    //                 $translations[$t->language][$t->field] = $t->value;
    //             }

    //             // language filter
    //             $filteredTranslations = isset($translations[$lang]) ? $translations[$lang] : [];

    //             return [
    //                 'id' => $cms->id,
    //                 'page_name' => $cms->page_name,
    //                 'slug' => $cms->slug,
    //                 'section_name' => $cms->section_name,
    //                 'image' => $cms->image ? asset($cms->image) : null,
    //                 'bg_image' => $cms->bg_image ? asset($cms->bg_image) : null,
    //                 'btn_text' => $cms->btn_text,
    //                 'btn_url' => $cms->btn_url,
    //                 'status' => $cms->status,
    //                 'translations' => $filteredTranslations
    //             ];
    //         });

    //         return response()->json([
    //             'success' => true,
    //             'data' => $data
    //         ]);
    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'CMS page not found.'
    //         ], 404);
    //     }
    // }
    // public function getByPageName(Request $request, $slug)
    // {
    //     try {
    //         // তিনটা fixed slug define করলাম
    //         $groupSlugs = ['problem-section', 'mission-section', 'solution-section'];

    //         // যদি request-এর slug এই তিনটার মধ্যে কোনো একটা হয়
    //         if (in_array($slug, $groupSlugs)) {
    //             $slugsToFetch = $groupSlugs;
    //         } else {
    //             $slugsToFetch = [$slug];
    //         }

    //         $cmsSections = Cms::with('translations')
    //             ->whereIn('slug', $slugsToFetch)
    //             ->get();

    //         if ($cmsSections->isEmpty()) {
    //             throw new \Exception('CMS section not found.');
    //         }

    //         $defaultLang = 'en';
    //         $lang = $request->get('language', $defaultLang);

    //         $data = $cmsSections->map(function ($cms) use ($lang) {
    //             $translations = [];
    //             foreach ($cms->translations as $t) {
    //                 $translations[$t->language][$t->field] = $t->value;
    //             }

    //             $filteredTranslations = $translations[$lang] ?? [];

    //             return [
    //                 'id' => $cms->id,
    //                 'page_name' => $cms->page_name,
    //                 'slug' => $cms->slug,
    //                 'section_name' => $cms->section_name,
    //                 'image' => $cms->image ? asset($cms->image) : null,
    //                 'bg_image' => $cms->bg_image ? asset($cms->bg_image) : null,
    //                 'btn_text' => $cms->btn_text,
    //                 'btn_url' => $cms->btn_url,
    //                 'status' => $cms->status,
    //                 'translations' => $filteredTranslations
    //             ];
    //         })->values();

    //         return response()->json([
    //             'success' => true,
    //             'data' => $data
    //         ]);
    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'CMS page not found.'
    //         ], 404);
    //     }
    // }
    public function getByPageName(Request $request, $slug)
    {
        try {
            // Define group slugs if you want multiple sections returned for certain pages
            $groupSlugs = ['problem-section', 'mission-section', 'solution-section'];

            // If the slug is one of the special group slugs, fetch all of them
            if (in_array($slug, $groupSlugs)) {
                $slugsToFetch = $groupSlugs;
            } else {
                $slugsToFetch = [$slug];
            }

            // Fetch sections with translations
            $cmsSections = Cms::with('translations')
                ->whereIn('slug', $slugsToFetch)
                ->get();

            if ($cmsSections->isEmpty()) {
                throw new \Exception('CMS section not found.');
            }

            $defaultLang = 'en';
            $lang = $request->get('language', $defaultLang);

            // Prepare flat array
            $data = $cmsSections->map(function ($cms) use ($lang) {
                $translations = [];
                foreach ($cms->translations as $t) {
                    $translations[$t->language][$t->field] = $t->value;
                }

                return [
                    'id' => $cms->id,
                    'page_name' => $cms->page_name,
                    'slug' => $cms->slug,
                    'section_name' => $cms->section_name,
                    'image' => $cms->image ? asset($cms->image) : null,
                    'bg_image' => $cms->bg_image ? asset($cms->bg_image) : null,
                    'btn_text' => $cms->btn_text,
                    'btn_url' => $cms->btn_url,
                    'status' => $cms->status === 1 ? 'active' : 'inactive',
                    'translations' => $translations[$lang] ?? ($translations['en'] ?? [])
                ];
            })->values();

            // Group Future Features sub-sections
            $futureFeaturesSlugs = [
                'future_features_dms_integration',
                'future_features_secure_data_access',
                'future_features_single_source_of_truth',
                'future_features_office_integration'
            ];

            $futureFeatures = $data->filter(fn($d) => in_array($d['section_name'], $futureFeaturesSlugs))->values();

            // Group Our Solution sub-sections
            $solutionSubSlugs = [
                'our_solution_challenges',
                'our_solution_refine'
            ];

            $solutionSubSections = $data->filter(fn($d) => in_array($d['section_name'], $solutionSubSlugs))->values();

            // Merge grouped sub-sections into main sections
            $finalData = $data->map(function ($d) use ($futureFeatures, $solutionSubSections) {
                if ($d['section_name'] === 'future_features_core_integration_main') {
                    $d['sub_sections'] = $futureFeatures;
                }
                if ($d['section_name'] === 'our_solution_main') {
                    $d['sub_sections'] = $solutionSubSections;
                }
                return $d;
            })->values();

            return response()->json([
                'success' => true,
                'data' => $finalData
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage() ?: 'CMS page not found.'
            ], 404);
        }
    }
}
