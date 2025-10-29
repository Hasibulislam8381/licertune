<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use App\Models\Cms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Exception;
use Yajra\DataTables\Facades\DataTables;

class CmsController extends Controller
{
    /**
     * Display a listing of CMS sections.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Cms::latest()->get();

            if (!empty($request->input('search.value'))) {
                $searchTerm = $request->input('search.value');
                $data = $data->filter(function ($item) use ($searchTerm) {
                    return str_contains(strtolower($item->title), strtolower($searchTerm));
                });
            }

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('title', function ($data) {
                    return '<p>' . $data->title . '</p>';
                })
                ->addColumn('status', function ($data) {
                    $status = '<div class="form-check form-switch form-switch-lg">';
                    $status .= '<input onclick="showStatusChangeAlert(' . $data->id . ')" type="checkbox" class="form-check-input" id="customSwitch' . $data->id . '" name="status"';
                    if ($data->status == 'active') {
                        $status .= ' checked';
                    }
                    $status .= '><label for="customSwitch' . $data->id . '" class="form-check-label"></label></div>';
                    return $status;
                })
                ->addColumn('action', function ($data) {
                    return '<div class="btn-group btn-group-md" role="group" aria-label="Basic example">
                        <a href="' . route('backend.cms.edit', ['id' => $data->id]) . '" type="button" class="text-white btn btn-primary btn-xl" title="Edit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                <path d="M16 5l3 3" />
                            </svg>
                        </a>
                        <a href="#" onclick="showDeleteConfirm(' . $data->id . ')" type="button" class="text-white btn btn-danger btn-xl" title="Delete">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-trash">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M20 6a1 1 0 0 1 .117 1.993l-.117 .007h-.081l-.919 11a3 3 0 0 1 -2.824 2.995l-.176 .005h-8c-1.598 0 -2.904 -1.249 -2.992 -2.75l-.005 -.167l-.923 -11.083h-.08a1 1 0 0 1 -.117 -1.993l.117 -.007h16z" />
                                <path d="M14 2a2 2 0 0 1 2 2a1 1 0 0 1 -1.993 .117l-.007 -.117h-4l-.007 .117a1 1 0 0 1 -1.993 -.117a2 2 0 0 1 1.85 -1.995l.15 -.005h4z" />
                            </svg>
                        </a>
                    </div>';
                })
                ->rawColumns(['title', 'status', 'action'])
                ->make();
        }

        return view('backend.cms.index');
    }

    /**
     * Show the form for creating a new CMS section.
     */
    public function create()
    {
        $languages = ['en', 'fr', 'es', 'de'];
        return view('backend.cms.create', compact('languages'));
    }

    /**
     * Store a newly created CMS section in database.
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'page_name' => 'required|string|max:255',
                'section_name' => 'required|string|max:255',
                'status' => 'required|in:active,inactive',
                'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
                'bg_image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // Upload images
            $imagePath = $request->hasFile('image') ? uploadImage($request->file('image'), 'cms') : null;
            $bgImagePath = $request->hasFile('bg_image') ? uploadImage($request->file('bg_image'), 'cms') : null;

            $cms = Cms::create([
                'page_name' => $request->page_name,
                'section_name' => $request->section_name,
                'slug' => Str::slug($request->page_name),
                'image' => $imagePath,
                'bg_image' => $bgImagePath,
                'btn_text' => $request->btn_text ?? null,
                'btn_url' => $request->btn_url ?? null,
                'status' => $request->status,
            ]);

            // Save translations
            $languages = ['en', 'fr', 'it', 'de'];
            foreach ($languages as $lang) {
                foreach (['title', 'sub_title', 'description', 'sub_description'] as $field) {
                    $fieldName = $field . '_' . $lang;
                    if ($request->has($fieldName)) {
                        $cms->translations()->create([
                            'language' => $lang,
                            'field' => $field,
                            'value' => $request->input($fieldName),
                        ]);
                    }
                }
            }

            return redirect()->route('backend.cms.index')->with('t-success', 'CMS section created successfully.');
        } catch (Exception $e) {
            return redirect()->route('backend.cms.index')->with('t-error', 'CMS section failed to create.');
        }
    }

    /**
     * Show the form for editing the CMS section.
     */
    public function edit($id)
    {
        $cms = Cms::with('translations')->findOrFail($id);
        $languages = ['en', 'fr', 'it', 'de']; // updated languages
        $translations = [];

        // Reformat translations for easier access in the view
        foreach ($cms->translations as $t) {
            $translations[$t->language][$t->field] = $t->value;
        }

        return view('backend.cms.edit', compact('cms', 'languages', 'translations'));
    }

    /**
     * Update the CMS section.
     */
    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'page_name' => 'required|string|max:255',
                'section_name' => 'required|string|max:255',
                'status' => 'required|in:active,inactive',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                'bg_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $cms = Cms::findOrFail($id);

            // Handle image uploads
            if ($request->hasFile('image')) {
                $cms->image = uploadImage($request->file('image'), 'cms');
            }

            if ($request->hasFile('bg_image')) {
                $cms->bg_image = uploadImage($request->file('bg_image'), 'cms');
            }

            $cms->update([
                'page_name' => $request->page_name,
                'section_name' => $request->section_name,
                'slug' => Str::slug($request->page_name),
                'btn_text' => $request->btn_text ?? $cms->btn_text,
                'btn_url' => $request->btn_url ?? $cms->btn_url,
                'status' => $request->status,
            ]);

            // Update translations
            $languages = ['en', 'fr', 'it', 'de'];
            foreach ($languages as $lang) {
                foreach (['title', 'sub_title', 'description', 'sub_description'] as $field) {
                    $fieldName = $field . '_' . $lang;
                    $value = $request->input($fieldName);

                    if ($value !== null) {
                        $cms->translations()->updateOrCreate(
                            ['language' => $lang, 'field' => $field],
                            ['value' => $value]
                        );
                    }
                }
            }

            return redirect()->route('backend.cms.index')->with('t-success', 'CMS section updated successfully.');
        } catch (Exception $e) {
            return redirect()->route('backend.cms.index')->with('t-error', 'CMS section failed to update.');
        }
    }


    /**
     * Toggle status.
     */
    public function status($id)
    {
        $cms = Cms::findOrFail($id);
        $cms->status = $cms->status == 'active' ? 'inactive' : 'active';
        $cms->save();

        return response()->json([
            'success' => true,
            'message' => $cms->status == 'active' ? 'Published successfully.' : 'Unpublished successfully.',
            'data' => $cms
        ]);
    }

    /**
     * Delete a CMS section.
     */
    public function destroy($id)
    {
        try {
            $cms = Cms::findOrFail($id);
            $cms->translations()->delete();
            $cms->delete();

            return response()->json([
                't-success' => true,
                'message' => 'CMS section deleted successfully.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                't-success' => false,
                'message' => 'Failed to delete CMS section.'
            ], 500);
        }
    }
}
