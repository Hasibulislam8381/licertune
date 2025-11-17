<?php

namespace Database\Seeders;

use App\Models\OurTeam;
use Illuminate\Database\Seeder;

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
                        'bio' => 'An accomplished Full-Stack Engineer, Aschvin
                        possesses deep expertise in cutting-edge cloud
                        technologies and Large Language Models LLMs. His
                        innovative approach keeps our platform at the
                        forefront of Al capabilities, continually enhancing
                        our ability to extract meaningful insights from data.',
                    ],
                    'fr' => [
                        'name' => 'Aschvin Umachandran',
                        'bio' => "Ingénieur Full-Stack accompli, Aschvin possède une expertise approfondie des technologies cloud de pointe et des LLM en grands modèles de langage. Son approche innovante maintient notre plateforme à la pointe de l'IA, améliorant continuellement notre capacité à extraire des informations pertinentes des données.",
                    ],
                    'it' => [
                        'name' => 'Aschvin Umachandran',
                        'bio' => "Aschvin, esperto Full-Stack Engineer, vanta una profonda
                        esperienza nelle tecnologie cloud all'avanguardia e nei LLM sui Large Language Model. Il suo
                        approccio innovativo mantiene la nostra piattaforma all'avanguardia nelle capacità di intelligenza artificiale, migliorando costantemente
                        la nostra capacità di estrarre informazioni significative dai dati.",
                    ],
                    'de' => [
                        'name' => 'Aschvin Umachandran',
                        'bio' => 'Als erfahrener Full-Stack-Ingenieur verfügt Aschvin über umfassende Expertise in modernsten Cloud-Technologien und Large Language Models (LLMs). Sein innovativer Ansatz sorgt dafür, dass unsere Plattform immer auf dem neuesten Stand der KI-Fähigkeiten bleibt und verbessert kontinuierlich unsere Fähigkeit, aus Daten aussagekräftige Erkenntnisse zu gewinnen.',
                    ],
                ],
                'image' => 'uploads/our_team/team2.jpg',
            ],
            [
                'translations' => [
                    'en' => [
                        'name' => 'Elio Petrini',
                        'bio' => 'As a Full-Stack Engineer with a unique legal background, Elio brings a critical dual perspective to our operations. His expertise not only drives the technical development of our platforms but also ensures strict adherence to legal frameworks and data compliance, particularly vital given our Swiss hosting.',
                    ],
                    'fr' => [
                        'name' => 'Elio Petrini',
                        'bio' => 'Als Full-Stack-Ingenieur mit einzigartigem juristischen Hintergrund bringt Elio eine entscheidende Doppelperspektive in unsere Abläufe ein. Seine Expertise treibt nicht nur die technische Entwicklung unserer Plattformen voran, sondern gewährleistet auch die strikte Einhaltung rechtlicher Rahmenbedingungen und die Einhaltung von Datenschutzbestimmungen, was angesichts unseres Schweizer Hostings besonders wichtig ist.',
                    ],
                    'it' => [
                        'name' => 'Elio Petrini',
                        'bio' => 'In qualità di Full-Stack Engineer con un background legale
                        esclusivo, Elio apporta una duplice prospettiva critica
                        alle nostre operazioni. La sua competenza non solo guida lo
                        sviluppo tecnico delle nostre piattaforme, ma
                        garantisce anche il rigoroso rispetto dei quadri normativi e
                        la conformità dei dati, particolarmente vitale dato il nostro hosting
                        svizzero.',
                    ],
                    'de' => [
                        'name' => 'Elio Petrini',
                        'bio' => 'Als Full-Stack-Ingenieur mit juristischem Hintergrund bringt Elio eine wertvolle doppelte Perspektive in unsere Arbeit ein. Seine Expertise treibt nicht nur die technische Entwicklung unserer Plattformen voran, sondern gewährleistet auch die strikte Einhaltung rechtlicher Rahmenbedingungen und der Datensicherheit – besonders wichtig angesichts unseres Hostings in der Schweiz.',
                    ],
                ],
                'image' => 'uploads/our_team/team1.jpg',
            ],
            [
                'translations' => [
                    'en' => [
                        'name' => 'Marmot',
                        'bio' => 'An accomplished Full-Stack Engineer, Aschvin
                        possesses deep expertise in cutting-edge cloud
                        technologies and Large Language Models LLMs. His
                        innovative approach keeps our platform at the
                        forefront of Al capabilities, continually enhancing
                        our ability to extract meaningful insights from data.',
                    ],
                    'fr' => [
                        'name' => 'Marmot',
                        'bio' => "Ingénieur Full-Stack accompli, Aschvin possède une expertise approfondie des technologies cloud de pointe et des LLM en grands modèles de langage. Son approche innovante maintient notre plateforme à la pointe de l'IA, améliorant continuellement notre capacité à extraire des informations pertinentes des données.",
                    ],
                    'it' => [
                        'name' => 'Marmot',
                        'bio' => "Aschvin, esperto Full-Stack Engineer, vanta una profonda
                        esperienza nelle tecnologie cloud all'avanguardia e nei LLM sui Large Language Model. Il suo
                        approccio innovativo mantiene la nostra piattaforma all'avanguardia nelle capacità di intelligenza artificiale, migliorando costantemente
                        la nostra capacità di estrarre informazioni significative dai dati.",
                    ],
                    'de' => [
                        'name' => 'Marmot',
                        'bio' => 'Wir freuen uns, bald ein neues Teammitglied begrüssen zu dürfen, das unser Know-how in der  Kundenintegration signifikant verstärken wird. Diese Person bringt umfassendes Wissen und  langjährige Erfahrung in den Bereichen Projektmanagement, Systems Engineering und  Networking mit. Damit ist sie die ideale Besetzung, um unsere Kunden bei der erfolgreichen  Integration komplexer Projekte zu unterstützen und selbst in anspruchsvollen, heterogenen  Umgebungen stets die optimale Lösung zu gewährleisten.',
                    ],
                ],
                'image' => 'uploads/our_team/team4.jpg',
            ],
        ];

        $languages = ['en', 'fr', 'it', 'de'];

        foreach ($members as $member) {
            $team = OurTeam::create([
                'image' => $member['image'],
                'status' => 'active',
            ]);

            foreach ($languages as $lang) {
                $team->translations()->create([
                    'language' => $lang,
                    'field' => 'name',
                    'value' => $member['translations'][$lang]['name'],
                ]);

                $team->translations()->create([
                    'language' => $lang,
                    'field' => 'bio',
                    'value' => $member['translations'][$lang]['bio'],
                ]);
            }
        }
    }
}
