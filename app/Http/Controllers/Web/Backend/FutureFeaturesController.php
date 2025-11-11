<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FutureFeatures;
use App\Models\FutureFeaturesTranslation;

class FutureFeaturesController extends Controller
{
    public function index()
    {
        $features = FutureFeatures::with('translations')->get();
        return view('backend.future_features.index', compact('features'));
    }

    public function updateAll(Request $request)
    {
        $data = $request->validate([
            'features.*.id' => 'required|exists:future_features,id',
            'features.*.image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'features.*.translations' => 'required|array',
            'features.*.translations.*.title' => 'required|string|max:255',
            'features.*.translations.*.features' => 'nullable|string',
        ]);

        foreach ($data['features'] as $item) {
            $feature = FutureFeatures::find($item['id']);

            // Image update
            if (!empty($item['image'])) {
                $feature->image = uploadImage($item['image'], 'future_features');
                $feature->save();
            }

            // Update translations
            foreach ($item['translations'] as $locale => $translationData) {
                FutureFeaturesTranslation::updateOrCreate(
                    [
                        'future_features_id' => $feature->id,
                        'locale' => $locale
                    ],
                    [
                        'title' => $translationData['title'],
                        'features' => $translationData['features'] ?? null
                    ]
                );
            }
        }

        return redirect()->back()->with('success', 'Future Features updated successfully.');
    }
}
