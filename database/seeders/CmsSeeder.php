<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cms;
use App\Models\CmsTranslation;
use App\Models\Translation;

class CmsSeeder extends Seeder
{
    public function run(): void
    {
        $pages = [
            // 🌐 SECTION 1: MAIN SECTION
            [
                'page_name' => 'About Us',
                'slug' => 'about-us',
                'section_name' => 'main_section',
                'image' => 'uploads/cms/17617063401563512939.jpg',
                'btn_text' => 'Learn More',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'About Us',
                        'sub_title' => 'About Sursenda',
                        'description' => "Our vision is simple: we’re pioneering the future of intelligent assistance. We develop the leading AI-powered Knowledge Assistant, specifically engineered for companies that demand heightened security and absolute data privacy. Our product is not just an assistant — it's a proactive partner designed to fit your workflow, helping you make informed decisions faster with traceable, data-driven insights."
                    ],
                    'fr' => [
                        'title' => 'À propos de nous',
                        'sub_title' => 'À propos de Sursenda',
                        'description' => "Notre vision est simple : nous façonnons l’avenir de l’assistance intelligente. Nous développons l’assistant de connaissance alimenté par l’IA, spécialement conçu pour les entreprises exigeant une sécurité renforcée et une confidentialité absolue des données. Notre produit n’est pas seulement un assistant — c’est un partenaire proactif conçu pour s’intégrer à votre flux de travail et vous aider à prendre des décisions éclairées plus rapidement grâce à des informations basées sur les données."
                    ],
                    'it' => [
                        'title' => 'Chi siamo',
                        'sub_title' => 'Su Sursenda',
                        'description' => "La nostra visione è semplice: stiamo plasmando il futuro dell’assistenza intelligente. Sviluppiamo il principale assistente alla conoscenza basato su IA, progettato specificamente per aziende che richiedono maggiore sicurezza e assoluta riservatezza dei dati. Il nostro prodotto non è solo un assistente — è un partner proattivo progettato per adattarsi al tuo flusso di lavoro, aiutandoti a prendere decisioni più rapide e basate sui dati."
                    ],
                    'de' => [
                        'title' => 'Über uns',
                        'sub_title' => 'Über Sursenda',
                        'description' => "Unsere Vision ist einfach: Wir gestalten die Zukunft der intelligenten Assistenz. Wir entwickeln den führenden KI-gestützten Knowledge Assistant, der speziell für Unternehmen entwickelt wurde, die erhöhte Sicherheit und absolute Datensouveränität verlangen. Unser Produkt ist nicht nur ein Assistent — es ist ein proaktiver Partner, der in Ihren Arbeitsablauf integriert ist und Ihnen hilft, fundierte Entscheidungen schneller zu treffen."
                    ],
                ],
            ],

            // 🌐 SECTION 2: WHY SURsENDA
            [
                'page_name' => 'About Us',
                'slug' => 'about-us',
                'section_name' => 'why_sursenda',
                'image' => 'uploads/cms/17617274901404899096.jpg',
                'btn_text' => null,
                'btn_url' => null,
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'Sursenda GmbH',
                        'description' => 'To empower knowledge-driven organizations by providing a secure and intelligent AI assistant that transforms corporate data into actionable insights, fostering efficiency and innovation with unwavering trust and data privacy.',
                        'sub_title' => 'Why Sursenda',
                        'sub_description' => "Platforms like Thomson Reuters and Harvey AI are essential in legal research, but our approach offers unmatched control. It allows you to dynamically select your own data sources and perform large-scale, reproducible analyses through an intuitive interface that ensures compliance with Swiss Data Governance laws."
                    ],
                    'fr' => [
                        'title' => 'Sursenda GmbH',
                        'description' => 'Donner aux organisations axées sur la connaissance les moyens d’agir en leur fournissant un assistant IA sécurisé et intelligent, transformant les données d’entreprise en informations exploitables, favorisant l’efficacité et l’innovation avec une confiance et une confidentialité des données inébranlables.',
                        'sub_title' => 'Pourquoi Sursenda',
                        'sub_description' => "Des plateformes comme Thomson Reuters et Harvey AI sont essentielles à la recherche juridique, mais notre approche offre un contrôle inégalé. Elle vous permet de sélectionner dynamiquement vos propres sources de données et d’effectuer des analyses reproductibles à grande échelle grâce à une interface intuitive garantissant la conformité avec les lois suisses sur la gouvernance des données."
                    ],
                    'it' => [
                        'title' => 'Sursenda GmbH',
                        'description' => 'Potenziare le organizzazioni basate sulla conoscenza fornendo un assistente AI sicuro e intelligente che trasformi i dati aziendali in informazioni utili, promuovendo efficienza e innovazione con fiducia incrollabile e tutela della privacy dei dati.',
                        'sub_title' => 'Perché Sursenda',
                        'sub_description' => "Piattaforme come Thomson Reuters e Harvey AI sono fondamentali per la ricerca legale, ma il nostro approccio offre un controllo senza pari. Ti consente di selezionare dinamicamente le tue fonti di dati e di eseguire analisi riproducibili su larga scala attraverso un’interfaccia intuitiva conforme alle leggi svizzere sulla governance dei dati."
                    ],
                    'de' => [
                        'title' => 'Sursenda GmbH',
                        'description' => 'Wissensgetriebene Organisationen zu stärken, indem ein sicherer und intelligenter KI-Assistent bereitgestellt wird, der Unternehmensdaten in umsetzbare Erkenntnisse verwandelt, Effizienz und Innovation mit unerschütterlichem Vertrauen und Datenschutz fördert.',
                        'sub_title' => 'Warum Sursenda',
                        'sub_description' => "Plattformen wie Thomson Reuters und Harvey AI sind für juristische Recherchen unerlässlich, aber unser Ansatz bietet eine beispiellose Kontrolle. Er ermöglicht es Ihnen, Ihre eigenen Datenquellen dynamisch auszuwählen und groß angelegte, reproduzierbare Analysen über eine intuitive Oberfläche durchzuführen, die die Einhaltung der Schweizer Datenschutzgesetze gewährleistet."
                    ],
                ],
            ],

            // 🌐 SECTION 3: MEET TEAM
            [
                'page_name' => 'About Us',
                'slug' => 'about-us',
                'section_name' => 'meet_team',
                'image' => null,
                'btn_text' => 'Learn More',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'Meet Our Team',
                        'description' => "We are a dynamic and driven team united by a shared mission — to develop the leading AI-powered Knowledge Assistant, combining diverse expertise from backend engineering to legal and cloud technologies."
                    ],
                    'fr' => [
                        'title' => 'Rencontrez notre équipe',
                        'description' => "Nous sommes une équipe dynamique et motivée, unie par une mission commune : développer l’assistant de connaissance alimenté par l’IA le plus performant, en combinant des compétences diverses en ingénierie backend, droit et technologies cloud."
                    ],
                    'it' => [
                        'title' => 'Incontra il nostro team',
                        'description' => "Siamo un team dinamico e motivato, unito da una missione comune: sviluppare il principale assistente alla conoscenza basato su IA, combinando competenze che spaziano dall’ingegneria backend al diritto e alle tecnologie cloud."
                    ],
                    'de' => [
                        'title' => 'Lernen Sie unser Team kennen',
                        'description' => "Wir sind ein dynamisches und engagiertes Team mit einer gemeinsamen Mission: die Entwicklung des führenden KI-gestützten Knowledge Assistant durch die Kombination von Fachwissen aus Backend-Engineering, Recht und Cloud-Technologien."
                    ],
                ],
            ],

            [
                'page_name' => 'ProblemMissionSolution',
                'slug' => 'problem-mission-solution',
                'section_name' => 'main_section',
                'image' => null,
                'btn_text' => '',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'The Problem – Our Mission – The Solution',
                        'description' => 'Turning real challenges into meaningful, human-centered solutions.',
                    ],
                    'fr' => [
                        'title' => 'Le Problème – Notre Mission – La Solution',
                        'description' => 'Transformer de véritables défis en solutions significatives et centrées sur l’humain.',
                    ],
                    'it' => [
                        'title' => 'Il Problema – La Nostra Missione – La Soluzione',
                        'description' => 'Trasformare sfide reali in soluzioni significative e incentrate sull’uomo.',
                    ],
                    'de' => [
                        'title' => 'Das Problem – Unsere Mission – Die Lösung',
                        'description' => 'Reale Herausforderungen in sinnvolle, menschenzentrierte Lösungen verwandeln.',
                    ],
                ]

            ],
            // 🟨 2. Problem Section
            [
                'page_name' => 'ProblemMissionSolution',
                'slug' => 'problem-section',
                'section_name' => 'problem_section',
                'image' => 'uploads/cms/17617269001590060268.jpg',
                'btn_text' => '',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'The Problem',
                        'description' => 'Businesses today face increasing complexity in managing data, scalability, and integration.',
                    ],
                    'fr' => [
                        'title' => 'Le Problème',
                        'description' => 'Les entreprises d’aujourd’hui sont confrontées à une complexité croissante dans la gestion des données, de la scalabilité et de l’intégration.',
                    ],
                    'it' => [
                        'title' => 'Il Problema',
                        'description' => 'Le aziende di oggi affrontano una crescente complessità nella gestione dei dati, della scalabilità e dell’integrazione.',
                    ],
                    'de' => [
                        'title' => 'Das Problem',
                        'description' => 'Unternehmen stehen heute vor zunehmender Komplexität bei der Verwaltung von Daten, Skalierbarkeit und Integration.',
                    ],
                ]
            ],
            // 🟩 3. Mission Section
            [
                'page_name' => 'ProblemMissionSolution',
                'slug' => 'mission-section',
                'section_name' => 'mission_section',
                'image' => 'uploads/cms/17617269001590060268.jpg',
                'btn_text' => '',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'Our Mission',
                        'description' => 'We aim to simplify complex digital ecosystems through innovative, reliable, and human-centered technology.',
                    ],
                    'fr' => [
                        'title' => 'Notre Mission',
                        'description' => 'Notre objectif est de simplifier les écosystèmes numériques complexes grâce à une technologie innovante, fiable et centrée sur l’humain.',
                    ],
                    'it' => [
                        'title' => 'La Nostra Missione',
                        'description' => 'Il nostro obiettivo è semplificare ecosistemi digitali complessi attraverso tecnologie innovative, affidabili e incentrate sull’uomo.',
                    ],
                    'de' => [
                        'title' => 'Unsere Mission',
                        'description' => 'Wir wollen komplexe digitale Ökosysteme durch innovative, zuverlässige und menschenzentrierte Technologie vereinfachen.',
                    ],
                ]
            ],
            // 🟥 4. Solution Section
            [
                'page_name' => 'ProblemMissionSolution',
                'slug' => 'solution-section',
                'section_name' => 'solution_section',
                'image' => 'uploads/cms/17617269001590060268.jpg',
                'btn_text' => '',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'The Solution',
                        'description' => 'Our unified platform delivers scalable infrastructure, robust data integration, and seamless automation.',
                    ],
                    'fr' => [
                        'title' => 'La Solution',
                        'description' => 'Notre plateforme unifiée offre une infrastructure évolutive, une intégration de données robuste et une automatisation fluide.',
                    ],
                    'it' => [
                        'title' => 'La Soluzione',
                        'description' => 'La nostra piattaforma unificata offre un’infrastruttura scalabile, un’integrazione dei dati solida e un’automazione fluida.',
                    ],
                    'de' => [
                        'title' => 'Die Lösung',
                        'description' => 'Unsere einheitliche Plattform bietet skalierbare Infrastruktur, robuste Datenintegration und nahtlose Automatisierung.',
                    ],
                ]
            ],
        ];


        foreach ($pages as $pageData) {
            $cms = Cms::firstOrCreate(
                [
                    'page_name' => $pageData['page_name'],
                    'section_name' => $pageData['section_name'],
                ],
                [
                    'slug' => $pageData['slug'],
                    'image' => $pageData['image'],
                    'btn_text' => $pageData['btn_text'],
                    'btn_url' => $pageData['btn_url'],
                    'status' => $pageData['status'],
                ]
            );

            // Insert translations per language
            foreach ($pageData['translations'] as $lang => $fields) {
                foreach ($fields as $field => $value) {
                    Translation::updateOrCreate(
                        [
                            'translatable_type' => Cms::class,
                            'translatable_id'   => $cms->id,
                            'language'          => $lang,
                            'field'             => $field,
                        ],
                        [
                            'value' => $value,
                        ]
                    );
                }
            }
        }
    }
}
