<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OurTeam;

class OurTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $members = [
            [
                'translations' => [
                    'en' => [
                        'name' => 'Noél Monnerat',
                        'bio'  => 'A highly skilled Backend Engineer specializing in large-scale distributed systems.',
                    ],
                    'fr' => [
                        'name' => 'Noél Monnerat',
                        'bio'  => 'Un ingénieur Backend hautement qualifié spécialisé dans les systèmes distribués à grande échelle.',
                    ],
                    'it' => [
                        'name' => 'Noél Monnerat',
                        'bio'  => 'Un ingegnere backend altamente qualificato specializzato in sistemi distribuiti su larga scala.',
                    ],
                    'de' => [
                        'name' => 'Noél Monnerat',
                        'bio'  => 'Ein hochqualifizierter Backend-Ingenieur, spezialisiert auf groß angelegte verteilte Systeme.',
                    ],
                ],
            ],
            [
                'translations' => [
                    'en' => [
                        'name' => 'Aschvin Umachandran',
                        'bio'  => 'Expert in cloud infrastructure and backend architecture, delivering scalable solutions.',
                    ],
                    'fr' => [
                        'name' => 'Aschvin Umachandran',
                        'bio'  => 'Expert en infrastructure cloud et architecture backend, fournissant des solutions évolutives.',
                    ],
                    'it' => [
                        'name' => 'Aschvin Umachandran',
                        'bio'  => 'Esperto in infrastrutture cloud e architettura backend, fornendo soluzioni scalabili.',
                    ],
                    'de' => [
                        'name' => 'Aschvin Umachandran',
                        'bio'  => 'Experte für Cloud-Infrastruktur und Backend-Architektur, liefert skalierbare Lösungen.',
                    ],
                ],
            ],
            [
                'translations' => [
                    'en' => [
                        'name' => 'Elio Petrini',
                        'bio'  => 'Full-stack developer with a passion for building robust and performant applications.',
                    ],
                    'fr' => [
                        'name' => 'Elio Petrini',
                        'bio'  => 'Développeur full-stack passionné par la création d’applications robustes et performantes.',
                    ],
                    'it' => [
                        'name' => 'Elio Petrini',
                        'bio'  => 'Sviluppatore full-stack con passione per la costruzione di applicazioni robuste e performanti.',
                    ],
                    'de' => [
                        'name' => 'Elio Petrini',
                        'bio'  => 'Full-Stack-Entwickler mit Leidenschaft für robuste und leistungsfähige Anwendungen.',
                    ],
                ],
            ],
            [
                'translations' => [
                    'en' => [
                        'name' => 'Aschvin Umachandran',
                        'bio'  => 'Specializes in distributed systems and optimizing backend processes for performance.',
                    ],
                    'fr' => [
                        'name' => 'Aschvin Umachandran',
                        'bio'  => 'Spécialiste des systèmes distribués et de l’optimisation des processus backend pour la performance.',
                    ],
                    'it' => [
                        'name' => 'Aschvin Umachandran',
                        'bio'  => 'Specialista in sistemi distribuiti e ottimizzazione dei processi backend per le prestazioni.',
                    ],
                    'de' => [
                        'name' => 'Aschvin Umachandran',
                        'bio'  => 'Spezialisiert auf verteilte Systeme und Optimierung von Backend-Prozessen für Leistung.',
                    ],
                ],
            ],
        ];

        $languages = ['en', 'fr', 'it', 'de'];
        $imagePath = 'uploads/our_team/1761717513706469015.jpg';

        foreach ($members as $member) {
            $team = OurTeam::create([
                'image'  => $imagePath,
                'status' => 'active',
            ]);

            foreach ($languages as $lang) {
                $team->translations()->create([
                    'language' => $lang,
                    'field'    => 'name',
                    'value'    => $member['translations'][$lang]['name'],
                ]);

                $team->translations()->create([
                    'language' => $lang,
                    'field'    => 'bio',
                    'value'    => $member['translations'][$lang]['bio'],
                ]);
            }
        }
    }
}
