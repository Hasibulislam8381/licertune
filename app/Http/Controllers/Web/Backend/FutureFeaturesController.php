<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FutureFeatures;

class FutureFeaturesController extends Controller
{
    public function index()
    {
        $features = FutureFeatures::all();
        return view('backend.future_features.index', compact('features'));
    }

    public function updateAll(Request $request)
    {
        $data = $request->validate([
            'features.*.id' => 'required|exists:future_features,id',
            'features.*.title' => 'required|string|max:255',
            'features.*.image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'features.*.features' => 'nullable|string',
        ]);

        foreach ($data['features'] as $item) {
            $feature = FutureFeatures::find($item['id']);

            // Single image only
            if (!empty($item['image'])) {
                $feature->image = uploadImage($item['image'], 'future_features');
            }

            $feature->title = $item['title'];
            $feature->features = $item['features']; // comma-separated string
            $feature->save();
        }

        return redirect()->back()->with('success', 'Future Features updated successfully.');
    }
}
