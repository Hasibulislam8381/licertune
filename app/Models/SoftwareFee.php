<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareFee extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function translations()
    {
        return $this->hasMany(SoftwareFeeTranslation::class);
    }

    // Helper to get translation
    public function getTranslation(string $field, string $lang = 'en'): ?string
    {
        return $this->translations->where('field', $field)->where('language', $lang)->first()?->value;
    }
}
