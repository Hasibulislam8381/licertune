<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurTeam extends Model
{
    protected $guarded = [];
    public function translations()
    {
        return $this->hasMany(OurTeamTranslation::class);
    }

    // Helper to get translation easily
    public function getTranslation($field, $lang = 'en')
    {
        return $this->translations->where('language', $lang)->where('field', $field)->first()?->value;
    }
}
