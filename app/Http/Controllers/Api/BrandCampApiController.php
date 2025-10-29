<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BrandCamp;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BrandCampApiController extends Controller
{
    /**
     * Get all BrandCamps or by slug with translations filtered by language.
     */
    public function index(Request $request): JsonResponse
    {
        $slug = $request->query('slug');
        $lang = $request->query('lang', 'en'); // default 'en'

        if ($slug) {
            $brandCamp = BrandCamp::where('slug', $slug)->with('translations')->first();

            if (!$brandCamp) {
                return response()->json([
                    'success' => false,
                    'message' => 'BrandCamp not found.'
                ], 404);
            }

            $data = [
                'id' => $brandCamp->id,
                'page_name' => $brandCamp->page_name,
                'slug' => $brandCamp->slug,
                'image' => $brandCamp->image ? asset($brandCamp->image) : null,
                'status' => $brandCamp->status,
                'title' => $brandCamp->getTranslation('title', $lang),
                'subtitle' => $brandCamp->getTranslation('subtitle', $lang),
                'description' => $brandCamp->getTranslation('description', $lang),
            ];

            return response()->json([
                'success' => true,
                'data' => $data
            ]);
        }

        // If no slug, return all BrandCamps
        $allBrandCamps = BrandCamp::with('translations')->get()->map(function ($brandCamp) use ($lang) {
            return [
                'id' => $brandCamp->id,
                'page_name' => $brandCamp->page_name,
                'slug' => $brandCamp->slug,
                'image' => $brandCamp->image ? asset($brandCamp->image) : null,
                'status' => $brandCamp->status,
                'title' => $brandCamp->getTranslation('title', $lang),
                'subtitle' => $brandCamp->getTranslation('subtitle', $lang),
                'description' => $brandCamp->getTranslation('description', $lang),
            ];
        });

        return response()->json([
            'success' => true,
            'data' => $allBrandCamps
        ]);
    }
}
