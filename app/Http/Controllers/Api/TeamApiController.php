<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\OurTeam;
use Illuminate\Http\Request;

class TeamApiController extends Controller
{
    /**
     * GET /api/team
     *
     * Optional query parameter: ?language=fr
     */
    public function index(Request $request)
    {
        $lang = $request->query('language', 'en'); // default English
        $teams = OurTeam::with('translations')->where('status', 'active')->get();

        $result = $teams->map(function ($team) use ($lang) {
            // Get translations for the requested language
            $translations = $team->translations->where('language', $lang)->pluck('value', 'field')->toArray();

            return [
                'id'    => $team->id,
                'name'  => $translations['name'] ?? $team->name,
                'bio'   => $translations['bio'] ?? $team->bio,
                'image' => $team->image ? asset('storage/' . $team->image) : null,
                'status' => $team->status,
            ];
        });

        return response()->json([
            'success' => true,
            'data'    => $result,
        ]);
    }
}
