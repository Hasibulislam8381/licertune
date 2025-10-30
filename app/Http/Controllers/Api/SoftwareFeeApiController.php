<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SoftwareFee;
use Illuminate\Http\Request;
use App\Traits\ApiResponse;

class SoftwareFeeApiController extends Controller
{
    use ApiResponse;

    /**
     * Get all software fees with translations.
     */
    public function index(Request $request)
    {
        try {
            $lang = $request->input('language', 'en'); // Default to English

            $fees = SoftwareFee::where('status', 'active')
                ->get()
                ->map(function ($fee) use ($lang) {
                    return [
                        'id' => $fee->id,
                        'title' => $fee->getTranslation('title', $lang),
                        'description' => $fee->getTranslation('description', $lang),
                        'price' => $fee->price,
                    ];
                });

            return $this->success($fees, 'Software fees retrieved successfully.', 200);
        } catch (\Exception $e) {
            return $this->error(null, 'Failed to fetch software fees. ' . $e->getMessage());
        }
    }
}
