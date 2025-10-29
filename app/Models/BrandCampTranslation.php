<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrandCampTranslation extends Model
{
    protected $fillable = ['brand_camp_id', 'language', 'field', 'value'];
    protected $hidden = ['created_at', 'updated_at'];
    public function brandCamp()
    {
        return $this->belongsTo(BrandCamp::class, 'brand_camp_id');
    }
}
