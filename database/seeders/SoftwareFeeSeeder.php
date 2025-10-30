<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SoftwareFee;

class SoftwareFeeSeeder extends Seeder
{
    protected array $languages = ['en', 'fr', 'it', 'de'];

    public function run(): void
    {
        // -------------------------------
        // 1. Per user, per month
        // -------------------------------
        $softwareFee1 = SoftwareFee::create([
            'title' => 'Per user, per month',
            'price' => 'CHF 40',
            'status' => 'active',
        ]);

        $translations1 = [
            'en' => [
                'title' => 'Per user, per month',
                'description' => "Site-wide flat fee ensuring predictable budgeting for your organization.\n1. Full access to all software features\n2. Regular updates and improvements\n3. Dedicated customer support"
            ],
            'fr' => [
                'title' => 'Par utilisateur, par mois',
                'description' => "Frais fixes pour l'ensemble du site garantissant une budgétisation prévisible pour votre organisation.\n1. Accès complet à toutes les fonctionnalités du logiciel\n2. Mises à jour et améliorations régulières\n3. Support client dédié"
            ],
            'it' => [
                'title' => 'Per utente, al mese',
                'description' => "Tariffa flat a livello del sito che garantisce un budget prevedibile per la tua organizzazione.\n1. Accesso completo a tutte le funzionalità del software\n2. Aggiornamenti e miglioramenti regolari\n3. Supporto clienti dedicato"
            ],
            'de' => [
                'title' => 'Pro Benutzer, pro Monat',
                'description' => "Siteweite Pauschale für eine planbare Budgetierung Ihrer Organisation.\n1. Voller Zugriff auf alle Softwarefunktionen\n2. Regelmäßige Updates und Verbesserungen\n3. Dedizierter Kundensupport"
            ],
        ];

        foreach ($this->languages as $lang) {
            $softwareFee1->translations()->createMany([
                [
                    'language' => $lang,
                    'field' => 'title',
                    'value' => $translations1[$lang]['title'],
                ],
                [
                    'language' => $lang,
                    'field' => 'description',
                    'value' => $translations1[$lang]['description'],
                ],
            ]);
        }

        // -------------------------------
        // 2. One-time setup fee
        // -------------------------------
        $softwareFee2 = SoftwareFee::create([
            'title' => 'One-time setup fee',
            'price' => 'CHF 30,000',
            'status' => 'active',
        ]);

        $translations2 = [
            'en' => [
                'title' => 'One-time setup fee',
                'description' => "One-off set-up fee for new customers.\n1. Full access to all software features\n2. Regular updates and improvements\n3. Dedicated customer support"
            ],
            'fr' => [
                'title' => 'Frais d\'installation unique',
                'description' => "Frais unique d'installation pour les nouveaux clients.\n1. Accès complet à toutes les fonctionnalités du logiciel\n2. Mises à jour et améliorations régulières\n3. Support client dédié"
            ],
            'it' => [
                'title' => 'Tariffa di configurazione una tantum',
                'description' => "Tariffa di configurazione una tantum per i nuovi clienti.\n1. Accesso completo a tutte le funzionalità del software\n2. Aggiornamenti e miglioramenti regolari\n3. Supporto clienti dedicato"
            ],
            'de' => [
                'title' => 'Einrichtungsgebühr einmalig',
                'description' => "Einmalige Einrichtungsgebühr für Neukunden.\n1. Voller Zugriff auf alle Softwarefunktionen\n2. Regelmäßige Updates und Verbesserungen\n3. Dedizierter Kundensupport"
            ],
        ];

        foreach ($this->languages as $lang) {
            $softwareFee2->translations()->createMany([
                [
                    'language' => $lang,
                    'field' => 'title',
                    'value' => $translations2[$lang]['title'],
                ],
                [
                    'language' => $lang,
                    'field' => 'description',
                    'value' => $translations2[$lang]['description'],
                ],
            ]);
        }
    }
}
