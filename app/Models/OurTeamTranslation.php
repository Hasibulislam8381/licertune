<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurTeamTranslation extends Model
{
    protected $fillable = ['our_team_id', 'language', 'field', 'value'];

    public function team()
    {
        return $this->belongsTo(OurTeam::class);
    }
}
