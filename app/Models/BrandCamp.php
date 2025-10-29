<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrandCamp extends Model
{
    protected $fillable = ['page_name', 'slug', 'image', 'status'];
    protected $hidden = ['created_at', 'updated_at'];
    public function translations()
    {
        return $this->hasMany(BrandCampTranslation::class, 'brand_camp_id');
    }

    // helper to get a field with fallback
    public function getTranslation(string $field, string $lang = 'en')
    {
        $t = $this->translations->firstWhere(function ($item) use ($field, $lang) {
            return $item->language === $lang && $item->field === $field;
        });

        if ($t) return $t->value;

        // fallback to English
        $en = $this->translations->firstWhere(function ($item) use ($field) {
            return $item->language === 'en' && $item->field === $field;
        });

        return $en ? $en->value : null;
    }
}
