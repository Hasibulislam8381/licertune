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
                    'en' => ['name' => 'Noél Monnerat', 'bio' => 'A highly skilled Backend Engineer specializing in large-scale distributed systems.'],
                    'fr' => ['name' => 'Noél Monnerat', 'bio' => 'Un ingénieur Backend hautement qualifié spécialisé dans les systèmes distribués à grande échelle.'],
                    'it' => ['name' => 'Noél Monnerat', 'bio' => 'Un ingegnere backend altamente qualificato specializzato in sistemi distribuiti su larga scala.'],
                    'de' => ['name' => 'Noél Monnerat', 'bio' => 'Ein hochqualifizierter Backend-Ingenieur, spezialisiert auf groß angelegte verteilte Systeme.'],
                ],
                'image' => 'uploads/our_team/team3.jpg',
            ],
            [
                'translations' => [
                    'en' => [
                        'name' => 'Aschvin Umachandran',
                        'bio'  => "An accomplished Full-Stack Engineer, Aschvin possesses deep expertise in cutting-edge cloud technologies and Large Language Models (LLMs). His innovative approach keeps our platform at the forefront of AI capabilities, continually enhancing our ability to extract meaningful insights from data.",
                    ],
                    'fr' => [
                        'name' => 'Aschvin Umachandran',
                        'bio'  => "Ingénieur Full-Stack accompli, Aschvin possède une expertise approfondie des technologies cloud de pointe et des modèles de langage étendus (LLM). Son approche innovante maintient notre plateforme à la pointe des capacités de l’IA, améliorant continuellement notre aptitude à extraire des informations pertinentes à partir des données.",
                    ],
                    'it' => [
                        'name' => 'Aschvin Umachandran',
                        'bio'  => "Ingegnere Full-Stack di grande esperienza, Aschvin possiede una profonda competenza nelle tecnologie cloud all’avanguardia e nei Large Language Models (LLM). Il suo approccio innovativo mantiene la nostra piattaforma all’avanguardia nelle capacità dell’IA, migliorando costantemente la nostra capacità di estrarre informazioni significative dai dati.",
                    ],
                    'de' => [
                        'name' => 'Aschvin Umachandran',
                        'bio'  => "Als erfahrener Full-Stack-Ingenieur verfügt Aschvin über umfassende Expertise in modernen Cloud-Technologien und Large Language Models (LLMs). Sein innovativer Ansatz hält unsere Plattform an der Spitze der KI-Fähigkeiten und verbessert kontinuierlich unsere Fähigkeit, aussagekräftige Erkenntnisse aus Daten zu gewinnen.",
                    ],
                ],
                'image' => 'uploads/our_team/team2.jpg',
            ],
            [
                'translations' => [
                    'en' => [
                        'name' => 'Elio Petrini',
                        'bio'  => "As a Full-Stack Engineer with a unique legal background, Elio brings a critical dual perspective to our operations. His expertise not only drives the technical development of our platforms but also ensures strict adherence to legal frameworks and data compliance, particularly vital given our Swiss hosting.",
                    ],
                    'fr' => [
                        'name' => 'Elio Petrini',
                        'bio'  => "En tant qu’ingénieur Full-Stack doté d’une formation juridique unique, Elio apporte une double perspective essentielle à nos opérations. Son expertise soutient non seulement le développement technique de nos plateformes, mais garantit également une stricte conformité aux cadres juridiques et aux exigences en matière de protection des données, un aspect particulièrement crucial compte tenu de notre hébergement en Suisse.",
                    ],
                    'it' => [
                        'name' => 'Elio Petrini',
                        'bio'  => "Come ingegnere Full-Stack con una formazione giuridica unica, Elio offre una doppia prospettiva fondamentale alle nostre operazioni. La sua competenza guida non solo lo sviluppo tecnico delle nostre piattaforme, ma assicura anche il rigoroso rispetto dei quadri legali e della conformità dei dati, un aspetto particolarmente importante dato il nostro hosting svizzero.",
                    ],
                    'de' => [
                        'name' => 'Elio Petrini',
                        'bio'  => "Als Full-Stack-Ingenieur mit juristischem Hintergrund bringt Elio eine wertvolle doppelte Perspektive in unsere Arbeit ein. Seine Expertise treibt nicht nur die technische Entwicklung unserer Plattformen voran, sondern gewährleistet auch die strikte Einhaltung rechtlicher Rahmenbedingungen und der Datensicherheit – besonders wichtig angesichts unseres Hostings in der Schweiz.",
                    ],
                ],
                'image' => 'uploads/our_team/team1.jpg',
            ],
            [
                'translations' => [
                    'en' => [
                        'name' => 'Aschvin Umachandran',
                        'bio'  => "An accomplished Full-Stack Engineer, Aschvin possesses deep expertise in cutting-edge cloud technologies and Large Language Models (LLMs). His innovative approach keeps our platform at the forefront of AI capabilities, continually enhancing our ability to extract meaningful insights from data.",
                    ],
                    'fr' => [
                        'name' => 'Aschvin Umachandran',
                        'bio'  => "Ingénieur Full-Stack accompli, Aschvin possède une expertise approfondie des technologies cloud de pointe et des modèles de langage étendus (LLM). Son approche innovante maintient notre plateforme à la pointe des capacités de l’IA, améliorant continuellement notre aptitude à extraire des informations pertinentes à partir des données.",
                    ],
                    'it' => [
                        'name' => 'Aschvin Umachandran',
                        'bio'  => "Ingegnere Full-Stack di grande esperienza, Aschvin possiede una profonda competenza nelle tecnologie cloud all’avanguardia e nei Large Language Models (LLM). Il suo approccio innovativo mantiene la nostra piattaforma all’avanguardia nelle capacità dell’IA, migliorando costantemente la nostra capacità di estrarre informazioni significative dai dati.",
                    ],
                    'de' => [
                        'name' => 'Aschvin Umachandran',
                        'bio'  => "Als erfahrener Full-Stack-Ingenieur verfügt Aschvin über umfassende Expertise in modernen Cloud-Technologien und Large Language Models (LLMs). Sein innovativer Ansatz hält unsere Plattform an der Spitze der KI-Fähigkeiten und verbessert kontinuierlich unsere Fähigkeit, aussagekräftige Erkenntnisse aus Daten zu gewinnen.",
                    ],
                ],
                'image' => 'uploads/our_team/team4.jpg',
            ],

        ];

        $languages = ['en', 'fr', 'it', 'de'];

        foreach ($members as $member) {
            $team = OurTeam::create([
                'image'  => $member['image'],
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
