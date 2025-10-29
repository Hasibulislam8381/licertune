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
                'image' => $cms->image ? asset('storage/' . $cms->image) : null,
                'bg_image' => $cms->bg_image ? asset('storage/' . $cms->bg_image) : null,
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
    public function getByPageName(Request $request, $slug)
    {
        try {
            $cmsSections = Cms::with('translations')->where('slug', $slug)->get();

            if ($cmsSections->isEmpty()) {
                throw new \Exception('CMS section not found.');
            }

            $defaultLang = 'en';
            $lang = $request->get('language', $defaultLang);

            $data = $cmsSections->map(function ($cms) use ($lang) {
                $translations = [];
                foreach ($cms->translations as $t) {
                    $translations[$t->language][$t->field] = $t->value;
                }

                // language filter
                $filteredTranslations = isset($translations[$lang]) ? $translations[$lang] : [];

                return [
                    'id' => $cms->id,
                    'page_name' => $cms->page_name,
                    'slug' => $cms->slug,
                    'section_name' => $cms->section_name,
                    'image' => $cms->image ? asset('storage/' . $cms->image) : null,
                    'bg_image' => $cms->bg_image ? asset('storage/' . $cms->bg_image) : null,
                    'btn_text' => $cms->btn_text,
                    'btn_url' => $cms->btn_url,
                    'status' => $cms->status,
                    'translations' => $filteredTranslations
                ];
            });

            return response()->json([
                'success' => true,
                'data' => $data
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'CMS page not found.'
            ], 404);
        }
    }
}
