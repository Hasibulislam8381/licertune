<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareFeeTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['software_fee_id', 'language', 'field', 'value'];
}
