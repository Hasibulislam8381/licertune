<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FutureFeatures;
use App\Models\FutureFeaturesTranslation;

class FutureFeaturesSeeder extends Seeder
{
    public function run()
    {
        // 1. Main feature record (image only)
        $feature = FutureFeatures::create([
            'title' => 'Future Features: Core Integration',
            'image' => 'uploads/future_features/17618186491150613299.jpg',
            'features' => 'DMS Integration, Secure Data Access, Single Source of Truth, Office Integration',
        ]);

        // 2. Translations
        $translations = [
            'en' => [
                'title' => 'Future Features: Core Integration',
                'features' => 'DMS Integration, Secure Data Access, Single Source of Truth, Office Integration',
            ],
            'fr' => [
                'title' => 'Fonctionnalités Futures : Intégration Centrale',
                'features' => 'Intégration DMS, Accès sécurisé aux données, Source unique de vérité, Intégration Office',
            ],
            'it' => [
                'title' => 'Funzionalità Future: Integrazione Core',
                'features' => 'Integrazione DMS, Accesso sicuro ai dati, Fonte unica di verità, Integrazione Office',
            ],
            'de' => [
                'title' => 'Zukünftige Funktionen: Kernintegration',
                'features' => 'DMS-Integration, Sicherer Datenzugriff, Single Source of Truth, Office-Integration',
            ],
        ];

        foreach ($translations as $locale => $data) {
            FutureFeaturesTranslation::create([
                'future_features_id' => $feature->id,
                'locale' => $locale,
                'title' => $data['title'],
                'features' => $data['features'],
            ]);
        }
    }
}
