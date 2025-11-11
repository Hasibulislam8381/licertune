<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FutureFeatures extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image', 'features'];

    // Optional: convert comma-separated features into array automatically
    public function getFeaturesArrayAttribute()
    {
        return explode(',', $this->features);
    }

    public function translations()
    {
        return $this->hasMany(FutureFeaturesTranslation::class);
    }

    public function translation($locale = null)
    {
        $locale = $locale ?: app()->getLocale();
        return $this->translations()->where('locale', $locale)->first();
    }
}
