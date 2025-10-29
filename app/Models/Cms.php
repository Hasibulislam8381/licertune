<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Cms extends Model
{
    //
    protected $guarded = ['id'];
    public function translations()
    {
        return $this->morphMany(\App\Models\Translation::class, 'translatable');
    }
}
