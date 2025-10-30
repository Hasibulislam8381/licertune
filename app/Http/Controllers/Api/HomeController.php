<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\FutureFeatures;
use App\Traits\ApiResponse;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    use ApiResponse;
    public function submitForm(Request $request)
    {
        try {
            $validated = $request->validate([
                'first_name'   => 'required|string|max:255',
                'last_name'    => 'nullable|string|max:255',
                'email'        => 'required|email|max:255',
                'organization' => 'nullable|string|max:255',
                'message'      => 'nullable|string',
            ]);
            $contact = Contact::create($validated);
            Mail::to('admin@example.com')->send(new ContactFormMail($contact));
            return $this->success($contact, 'Form submitted successfully.', 200);
        } catch (\Exception $e) {
            return $this->error(
                null,
                'Something went wrong: ' . $e->getMessage(),
                500
            );
        }
    }


    public function getAllFutureFeature()
    {
        try {
            $features = FutureFeatures::all()->map(function ($feature) {
                return [
                    'id' => $feature->id,
                    'title' => $feature->title,
                    'image' => $feature->image ? asset($feature->image) : null,
                    'features' => $feature->features ? explode(',', $feature->features) : [],
                ];
            });

            return response()->json([
                'success' => true,
                'data' => $features
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage() ?: 'Could not fetch features'
            ], 500);
        }
    }
}
