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
                'title' => 'Fonctionnalités futures : Administration avancée',
                'features' => "Gestion granulaire des utilisateurs et des rôles , Politiques personnalisées. Fonctionnalités de conformité et d'audit , Utilisation et performances du tableau de bord d'analyse , Évolutivité et gouvernance de niveau entreprise ",
            ],
            'it' => [
                'title' => 'Funzionalità future: amministrazione avanzata',
                'features' => 'Gestione granulare di utenti e ruoli, Criteri personalizzati, funzionalità di conformità e audit ,Utilizzo e prestazioni della dashboard di analisi ,Scalabilità e governance di livello aziendale',
            ],
            'de' => [
                'title' => 'Zukünftige Funktionen: Erweiterte Verwaltung',
                'features' => 'Granulare Benutzer- und Rollenverwaltung , Benutzerdefinierte Richtlinien, Compliance- und Auditfunktionen , Nutzung und Leistung des Analytics-Dashboards , Skalierbarkeit und Governance auf Unternehmensniveau',
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
