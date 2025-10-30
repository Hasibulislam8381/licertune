<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use App\Models\BrandCamp;
use App\Models\BrandCampTranslation;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class BrandCampController extends Controller
{
    protected array $languages = ['en', 'fr', 'it', 'de'];

    /**
     * Display a listing of BrandCamp sections.
     */
    public function index(Request $request): View|JsonResponse
    {
        if ($request->ajax()) {
            $data = BrandCamp::latest()->get();

            if (!empty($request->input('search.value'))) {
                $searchTerm = $request->input('search.value');
                $data = $data->filter(function ($item) use ($searchTerm) {
                    return str_contains(strtolower($item->getTranslation('title', 'en')), strtolower($searchTerm));
                });
            }

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('page_name', fn($d) => $d->page_name)  // শুধু page_name দেখাবে
                ->addColumn('image', fn($d) => $d->image ? '<img src="' . asset($d->image) . '" width="50">' : '')
                ->addColumn('status', function ($d) {
                    $status = '<div class="form-check form-switch form-switch-lg">';
                    $status .= '<input onclick="showStatusChangeAlert(' . $d->id . ')" type="checkbox" class="form-check-input" id="customSwitch' . $d->id . '" name="status"';
                    if ($d->status === 'active') $status .= ' checked';
                    $status .= '><label for="customSwitch' . $d->id . '" class="form-check-label"></label></div>';
                    return $status;
                })
                ->addColumn('action', function ($d) {
                    return '<div class="btn-group btn-group-md">
            <a href="' . route('backend.brand_camp.edit', $d->id) . '" class="btn btn-primary btn-xl" title="Edit">Edit</a>

        </div>';
                })
                ->rawColumns(['image', 'status', 'action'])
                ->make();
        }

        return view('backend.brand_camp.index');
    }

    /**
     * Show form to create new BrandCamp section.
     */
    public function create(): View|RedirectResponse
    {
        if (!User::find(auth()->user()->id)) return redirect()->route('backend.brand_camp.index');
        return view('backend.brand_camp.create', ['languages' => $this->languages]);
    }

    /**
     * Store a newly created BrandCamp section.
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            $validator = Validator::make($request->all(), [
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            ]);

            if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

            $brand = new BrandCamp();
            $brand->status = 'active';
            $brand->page_name = $request->input('page_name');
            $brand->slug = Str::slug($request->input('page_name'));
            if ($request->hasFile('image')) {
                $brand->image = uploadImage($request->file('image'), 'brandcamp');
            }

            $brand->save();

            // Save translations
            $translations = $request->input('translations', []);
            foreach ($translations as $lang => $fields) {
                foreach ($fields as $field => $value) {
                    if ($value) {
                        $brand->translations()->create([
                            'brand_camp_id' => $brand->id,
                            'language'      => $lang,
                            'field'         => $field,
                            'value'         => $value,
                        ]);
                    }
                }
            }

            return redirect()->route('backend.brand_camp.index')->with('t-success', 'BrandCamp section created successfully.');
        } catch (Exception $e) {
            return redirect()->route('backend.brand_camp.index')->with('t-error', 'Failed to create BrandCamp section.');
        }
    }

    /**
     * Show form to edit existing BrandCamp section.
     */
    public function edit(int $id): View|RedirectResponse
    {
        if (!User::find(auth()->user()->id)) return redirect()->route('backend.brand_camp.index');

        $brand = BrandCamp::with('translations')->findOrFail($id);

        $translations = [];
        foreach ($brand->translations as $t) {
            $translations[$t->language][$t->field] = $t->value;
        }

        return view('backend.brand_camp.edit', [
            'data' => $brand,
            'languages' => $this->languages,
            'translations' => $translations,
        ]);
    }

    /**
     * Update an existing BrandCamp section.
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        try {
            $validator = Validator::make($request->all(), [
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            ]);

            if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

            $brand = BrandCamp::findOrFail($id);
            $brand->page_name = $request->input('page_name');
            $brand->slug = Str::slug($request->input('page_name'));
            if ($request->hasFile('image')) {
                $brand->image = uploadImage($request->file('image'), 'brandcamp');
            }

            $brand->save();

            // Update translations
            foreach ($this->languages as $lang) {
                foreach (['title', 'subtitle', 'description'] as $field) {
                    $value = $request->input("{$field}_{$lang}");
                    if ($value !== null) {
                        $brand->translations()->updateOrCreate(
                            ['language' => $lang, 'field' => $field],
                            ['value' => $value]
                        );
                    }
                }
            }

            return redirect()->route('backend.brand_camp.index')->with('t-success', 'BrandCamp section updated successfully.');
        } catch (Exception $e) {
            return redirect()->route('backend.brand_camp.index')->with('t-error', 'Failed to update BrandCamp section.');
        }
    }

    /**
     * Toggle status of a BrandCamp section.
     */
    public function status(int $id): JsonResponse
    {
        $brand = BrandCamp::findOrFail($id);
        $brand->status = $brand->status === 'active' ? 'inactive' : 'active';
        $brand->save();

        return response()->json([
            'success' => $brand->status === 'active',
            'message' => $brand->status === 'active' ? 'Published Successfully.' : 'Unpublished Successfully.',
            'data' => $brand,
        ]);
    }

    /**
     * Delete a BrandCamp section.
     */
    public function destroy(int $id): JsonResponse
    {
        try {
            $brand = BrandCamp::with('translations')->findOrFail($id);
            $brand->translations()->delete();
            $brand->delete();

            return response()->json([
                't-success' => true,
                'message' => 'Deleted successfully.',
            ]);
        } catch (Exception $e) {
            return response()->json([
                't-success' => false,
                'message' => 'Failed to delete BrandCamp section.',
            ], 500);
        }
    }
}
