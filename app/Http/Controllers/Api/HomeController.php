<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\DynamicPage;
use App\Models\FutureFeatures;
use App\Models\Menu;
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


    public function getAllFutureFeature(Request $request)
    {

        try {
            $locale = $request->query('language', 'en'); // ?lang=fr, default English

            $features = FutureFeatures::with(['translations' => function ($q) use ($locale) {
                $q->where('locale', $locale);
            }])->get()->map(function ($feature) use ($locale) {
                // Get translation or fallback to English
                $translation = $feature->translations->first();
                if (!$translation) {
                    $translation = $feature->translations()->where('locale', 'en')->first();
                }

                return [
                    'id' => $feature->id,
                    'title' => $translation->title ?? null,
                    'image' => $feature->image ? asset($feature->image) : null,
                    'features' => $translation->features ? explode(',', $translation->features) : [],
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
    public function getDynamicPage(Request $request, $slug)
    {
        // language param, default 'en'
        $language = $request->get('language', 'en');

        $page = DynamicPage::where('page_slug', $slug)
            ->with(['translations' => function ($query) use ($language) {
                $query->where('locale', $language);
            }])->firstOrFail();

        $translation = $page->translations->first();

        // raw content
        $content = $translation->page_content ?? $page->page_content ?? '';

        // strip HTML tags
        $contentText = strip_tags($content);

        // remove extra whitespace, \n, \r, tabs
        $contentText = preg_replace("/\s+/", ' ', $contentText);
        $contentText = trim($contentText);

        return response()->json([
            'success'  => true,
            'language' => $language,
            'data'     => [
                'id'      => $page->id,
                'slug'    => $page->page_slug,
                'title'   => $translation->page_title ?? $page->page_title,
                'content' => $contentText,  // clean plain text
            ],
        ]);
    }
}
