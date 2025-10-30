<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FutureFeatures;

class FutureFeaturesSeeder extends Seeder
{
    public function run()
    {
        FutureFeatures::create([
            'title' => 'Future Features: Core Integration',
            'features' => 'DMS Integration, Secure Data Access, Single Source of Truth, Office Integration',
            'image' => 'uploads/future_features/17618186491150613299.jpg', // porer somoy upload korte paro
        ]);
    }
}
