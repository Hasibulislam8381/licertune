<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DynamicPageTranslation extends Model
{
    protected $fillable = ['dynamic_page_id', 'locale', 'page_title', 'page_content'];

    public function page()
    {
        return $this->belongsTo(DynamicPage::class, 'dynamic_page_id');
    }
}
