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
            'title' => 'Future Features: Advanced Administration',
            'image' => 'uploads/future_features/17618186491150613299.jpg',
            'features' => 'Granular user & role management, Custom policies. compliance & audit features, Analytics dashboard usage and performance, Enterprise-grade scalability and governance',
        ]);

        // 2. Translations
        $translations = [
            'en' => [
                'title' => 'Future Features: Advanced Administration',
                'features' => 'Granular user & role management, Custom policies. Compliance & audit features, Analytics dashboard usage and performance, Enterprise-grade scalability and governance',
            ],
            'fr' => [
                'title' => 'Fonctionnalités Futures : Administration Avancée',
                'features' => 'Gestion granulaire des utilisateurs et des rôles. Politiques personnalisées, Fonctions de conformité et d’audit, Tableau de bord analytique sur l’utilisation et les performances, Gouvernance et évolutivité de niveau entreprise',
            ],
            'it' => [
                'title' => 'Funzionalità Future: Amministrazione Avanzata',
                'features' => 'Gestione granulare di utenti e ruoli, Politiche personalizzate. Funzionalità di conformità e audit, Dashboard analitica su utilizzo e prestazioni, Scalabilità e governance di livello enterprise',
            ],
            'de' => [
                'title' => 'Zukünftige Funktionen: Erweiterte Verwaltung',
                'features' => 'Granulare Benutzer- und Rollenverwaltung, Benutzerdefinierte Richtlinien. Compliance- und Auditfunktionen, Analyse-Dashboard für Nutzung und Leistung, Unternehmensweite Skalierbarkeit und Governance',
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
