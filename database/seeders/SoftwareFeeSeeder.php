<?php

namespace Database\Seeders;

use App\Models\SoftwareFee;
use Illuminate\Database\Seeder;

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
                'description' => "Forfait à l'échelle du site garantissant une budgétisation prévisible pour votre organisation."
            ],
            'it' => [
                'title' => 'Per utente, al mese',
                'description' => "Canone fisso per l'intero sito, che garantisce un budget prevedibile per la tua organizzazione. \n Accesso completo a tutte le funzionalità del software \n1. Aggiornamenti e miglioramenti regolari \n2. Assistenza clienti dedicata "
            ],
            'de' => [
                'title' => 'Pro Benutzer, pro Monat',
                'description' => 'Eine standortweite Pauschalgebühr gewährleistet eine vorhersehbare Budgetierung für Ihr Unternehmen.'
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
                'title' => 'One-time setup fee',
                'description' => 'Costo di attivazione una tantum per i nuovi clienti.'
            ],
            'it' => [
                'title' => 'Costo di installazione una tantum',
                'description' => "Tariffa di configurazione una tantum per i nuovi clienti.\n1. Accesso completo a tutte le funzionalità del software\n2. Aggiornamenti e miglioramenti regolari\n3. Supporto clienti dedicato"
            ],
            'de' => [
                'title' => 'Einmalige Einrichtungsgebühr',
                'description' => 'Einmalige Einrichtungsgebühr für Neukunden.'
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
