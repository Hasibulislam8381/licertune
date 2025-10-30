<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use App\Models\SoftwareFee;
use App\Models\Translation;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class SoftwareFeeController extends Controller
{
    protected array $languages = ['en', 'fr', 'it', 'de'];

    /**
     * Display a listing of Software Fees.
     */
    public function index(Request $request): View|JsonResponse
    {
        if ($request->ajax()) {
            $data = SoftwareFee::latest()->get();

            if (!empty($request->input('search.value'))) {
                $searchTerm = $request->input('search.value');
                $data = $data->filter(function ($item) use ($searchTerm) {
                    return str_contains(strtolower($item->getTranslation('title', 'en')), strtolower($searchTerm));
                });
            }

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('title', fn($d) => $d->getTranslation('title', 'en'))
                ->addColumn('price', fn($d) => $d->price)
                ->addColumn('status', function ($d) {
                    $status = '<div class="form-check form-switch form-switch-lg">';
                    $status .= '<input onclick="showStatusChangeAlert(' . $d->id . ')" type="checkbox" class="form-check-input" id="customSwitch' . $d->id . '" name="status"';
                    if ($d->status === 'active') $status .= ' checked';
                    $status .= '><label for="customSwitch' . $d->id . '" class="form-check-label"></label></div>';
                    return $status;
                })
                ->addColumn('action', function ($d) {
                    return '<div class="btn-group btn-group-md">
                        <a href="' . route('backend.software_fees.edit', $d->id) . '" class="btn btn-primary btn-xl" title="Edit">Edit</a>
                           <button onclick="showDeleteConfirm(' . $d->id . ')" class="btn btn-danger btn-xl" title="Delete">Delete</button>
                    </div>';
                })
                ->rawColumns(['status', 'action'])
                ->make();
        }

        return view('backend.software_fees.index');
    }

    /**
     * Show form to create new Software Fee.
     */
    public function create(): View|RedirectResponse
    {
        if (!User::find(auth()->user()->id)) return redirect()->route('backend.software_fees.index');
        return view('backend.software_fees.create', ['languages' => $this->languages]);
    }

    /**
     * Store a newly created Software Fee.
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            $validator = Validator::make($request->all(), [
                'title_en' => 'required|string|max:255',
                'price' => 'required|string|max:255',
                'status' => 'required|in:active,inactive',
            ]);

            if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

            $softwareFee = SoftwareFee::create([
                'title' => $request->input('title_en'),
                'price' => $request->input('price'),
                'status' => 'active',
            ]);

            // Save translations
            foreach ($this->languages as $lang) {
                $titleField = 'title_' . $lang;
                $descField = 'description_' . $lang;
                $softwareFee->translations()->createMany([
                    [
                        'language' => $lang,
                        'field' => 'title',
                        'value' => $request->input($titleField) ?? '',
                    ],
                    [
                        'language' => $lang,
                        'field' => 'description',
                        'value' => $request->input($descField) ?? '',
                    ],
                ]);
            }

            return redirect()->route('backend.software_fees.index')
                ->with('t-success', 'Software Fee created successfully.');
        } catch (Exception $e) {
            return redirect()->route('backend.software_fees.index')
                ->with('t-error', 'Failed to create Software Fee. Error: ' . $e->getMessage());
        }
    }

    /**
     * Show form to edit existing Software Fee.
     */
    public function edit(int $id): View|RedirectResponse
    {
        if (!User::find(auth()->user()->id)) return redirect()->route('backend.software_fees.index');

        $softwareFee = SoftwareFee::with('translations')->findOrFail($id);

        $translations = [];
        foreach ($softwareFee->translations as $t) {
            $translations[$t->language][$t->field] = $t->value;
        }

        return view('backend.software_fees.edit', [
            'data' => $softwareFee,
            'languages' => $this->languages,
            'translations' => $translations,
        ]);
    }

    /**
     * Update an existing Software Fee.
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        try {
            $validator = Validator::make($request->all(), [
                'price' => 'required|string|max:255',
                'status' => 'required|in:active,inactive',
            ]);

            if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

            $softwareFee = SoftwareFee::findOrFail($id);
            $softwareFee->price = $request->input('price');
            $softwareFee->status = $request->input('status');
            $softwareFee->save();

            // Update translations
            foreach ($this->languages as $lang) {
                foreach (['title', 'description'] as $field) {
                    $value = $request->input("{$field}_{$lang}");
                    if ($value !== null) {
                        $softwareFee->translations()->updateOrCreate(
                            ['language' => $lang, 'field' => $field],
                            ['value' => $value]
                        );
                    }
                }
            }

            return redirect()->route('backend.software_fees.index')
                ->with('t-success', 'Software Fee updated successfully.');
        } catch (Exception $e) {
            return redirect()->route('backend.software_fees.index')
                ->with('t-error', 'Failed to update Software Fee. Error: ' . $e->getMessage());
        }
    }

    /**
     * Toggle status of a Software Fee.
     */
    public function status(int $id): JsonResponse
    {
        $softwareFee = SoftwareFee::findOrFail($id);
        $softwareFee->status = $softwareFee->status === 'active' ? 'inactive' : 'active';
        $softwareFee->save();

        return response()->json([
            'success' => $softwareFee->status === 'active',
            'message' => $softwareFee->status === 'active' ? 'Published Successfully.' : 'Unpublished Successfully.',
            'data' => $softwareFee,
        ]);
    }

    /**
     * Delete a Software Fee.
     */
    public function destroy(int $id): JsonResponse
    {
        try {
            $softwareFee = SoftwareFee::with('translations')->findOrFail($id);
            $softwareFee->translations()->delete();
            $softwareFee->delete();

            return response()->json([
                't-success' => true,
                'message' => 'Deleted successfully.',
            ]);
        } catch (Exception $e) {
            return response()->json([
                't-success' => false,
                'message' => 'Failed to delete Software Fee.',
            ], 500);
        }
    }
}
