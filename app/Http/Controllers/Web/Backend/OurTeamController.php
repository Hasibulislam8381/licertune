<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use App\Models\OurTeam;
use App\Models\OurTeamTranslation;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class OurTeamController extends Controller
{
    protected array $languages = ['en', 'fr', 'it', 'de'];

    /**
     * Display a listing of the team members.
     */
    public function index(Request $request): View|JsonResponse
    {
        if ($request->ajax()) {
            $data = OurTeam::latest()->get();

            if (!empty($request->input('search.value'))) {
                $searchTerm = $request->input('search.value');
                $data = $data->filter(function ($item) use ($searchTerm) {
                    // Search in default language (en) name
                    return str_contains(strtolower($item->getTranslation('name', 'en')), strtolower($searchTerm));
                });
            }

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('name', fn($d) => $d->getTranslation('name', 'en'))
                ->addColumn('bio', function ($d) {
                    $bio = $d->getTranslation('bio', 'en') ?? '';
                    return '<p>' . (strlen($bio) > 100 ? substr($bio, 0, 100) . '...' : $bio) . '</p>';
                })
                ->addColumn('image', fn($d) => $d->image ? '<img src="' . asset($d->image) . '" width="50">' : '')
                ->addColumn('status', function ($d) {
                    $status = '<div class="form-check form-switch form-switch-lg">';
                    $status .= '<input onclick="showStatusChangeAlert(' . $d->id . ')" type="checkbox" class="form-check-input" id="customSwitch' . $d->id . '" name="status"';
                    if ($d->status === 'active') $status .= ' checked';
                    $status .= '><label for="customSwitch' . $d->id . '" class="form-check-label"></label></div>';
                    return $status;
                })
                ->addColumn('action', function ($d) {
                    return '<div class="btn-group btn-group-md" role="group">
                        <a href="' . route('backend.our_team.edit', $d->id) . '" class="btn btn-primary btn-xl" title="Edit">Edit</a>
                        <a href="#" onclick="showDeleteConfirm(' . $d->id . ')" class="btn btn-danger btn-xl" title="Delete">Delete</a>
                    </div>';
                })
                ->rawColumns(['bio', 'image', 'status', 'action'])
                ->make();
        }

        return view('backend.our_team.index');
    }

    /**
     * Show form to create new team member.
     */
    public function create(): View|RedirectResponse
    {
        if (!User::find(auth()->user()->id)) return redirect()->route('backend.our_team.index');
        return view('backend.our_team.create', ['languages' => $this->languages]);
    }

    /**
     * Store a newly created team member.
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            // Validate only the image, translations handled separately
            $validator = Validator::make($request->all(), [
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // Create main team record
            $team = new OurTeam();
            $team->status = 'active';

            // Upload image if exists
            if ($request->hasFile('image')) {
                $team->image = uploadImage($request->file('image'), 'our_team');
            }

            $team->save();

            // Save translations
            $translations = $request->input('translations', []); // array: en => [name => '', bio => ''], etc.

            foreach ($translations as $lang => $fields) {
                foreach ($fields as $field => $value) {
                    if ($value) {
                        $team->translations()->create([
                            'our_team_id' => $team->id,
                            'language'    => $lang,
                            'field'       => $field,
                            'value'       => $value,
                        ]);
                    }
                }
            }

            return redirect()->route('backend.our_team.index')
                ->with('t-success', 'Team member created successfully.');
        } catch (Exception $e) {
            // Optionally log $e->getMessage() for debugging
            return redirect()->route('backend.our_team.index')
                ->with('t-error', 'Failed to create team member.');
        }
    }

    /**
     * Show form to edit existing team member.
     */
    /**
     * Show the form for editing an existing team member.
     */
    public function edit(int $id): View|RedirectResponse
    {
        if (!User::find(auth()->user()->id)) {
            return redirect()->route('backend.our_team.index');
        }

        $team = OurTeam::with('translations')->findOrFail($id);

        // Reformat translations for easy access in view
        $translations = [];
        foreach ($team->translations as $t) {
            $translations[$t->language][$t->field] = $t->value;
        }

        return view('backend.our_team.edit', [
            'data' => $team,
            'languages' => $this->languages,
            'translations' => $translations,
        ]);
    }

    /**
     * Update an existing team member.
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        try {
            $validator = Validator::make($request->all(), [
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $team = OurTeam::findOrFail($id);

            // Upload new image if provided
            if ($request->hasFile('image')) {
                $team->image = uploadImage($request->file('image'), 'our_team');
            }

            $team->save();

            // Update translations for all languages
            foreach ($this->languages as $lang) {
                foreach (['name', 'bio'] as $field) {
                    $value = $request->input("{$field}_{$lang}");
                    if ($value !== null) {
                        $team->translations()->updateOrCreate(
                            ['language' => $lang, 'field' => $field],
                            ['value' => $value]
                        );
                    }
                }
            }

            return redirect()->route('backend.our_team.index')->with('t-success', 'Team member updated successfully.');
        } catch (Exception $e) {
            return redirect()->route('backend.our_team.index')->with('t-error', 'Failed to update team member.');
        }
    }


    /**
     * Toggle the status of a team member.
     */
    public function status(int $id): JsonResponse
    {
        $team = OurTeam::findOrFail($id);
        $team->status = $team->status === 'active' ? 'inactive' : 'active';
        $team->save();

        return response()->json([
            'success' => $team->status === 'active',
            'message' => $team->status === 'active' ? 'Published Successfully.' : 'Unpublished Successfully.',
            'data' => $team,
        ]);
    }

    /**
     * Delete a team member.
     */
    public function destroy(int $id): JsonResponse
    {
        try {
            $team = OurTeam::with('translations')->findOrFail($id);

            // Delete translations first
            $team->translations()->delete();

            // Delete main team record
            $team->delete();

            return response()->json([
                't-success' => true,
                'message' => 'Deleted successfully.',
            ]);
        } catch (Exception $e) {
            return response()->json([
                't-success' => false,
                'message' => 'Failed to delete team member.',
            ], 500);
        }
    }
}
