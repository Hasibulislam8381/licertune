<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FutureFeaturesTranslation extends Model
{
    protected $fillable = ['future_features_id', 'locale', 'title', 'features'];

    public function futureFeature()
    {
        return $this->belongsTo(FutureFeatures::class);
    }
}
