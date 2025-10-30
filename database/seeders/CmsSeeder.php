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
            // 🟥 Pricing Section
            [
                'page_name' => 'Pricing',
                'slug' => 'pricing-section',
                'section_name' => 'pricing_section',
                'image' => null,       // যদি image না থাকে
                'btn_text' => '',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'Our Transparent Pricing Model',
                        'description' => "We believe in a clear and fair pricing model. The only fee we charge is our core licensing fee.\n\nCloud infrastructure costs (compute, storage, bandwidth) are billed directly to the customer.\nCustomers pay exactly what they consume — no hidden markups.\nYou pay for the value you receive ensuring scalability: your costs grow only with usage."
                    ],
                    'fr' => [
                        'title' => 'Notre modèle de tarification transparent',
                        'description' => "Nous croyons en un modèle de tarification clair et équitable. Le seul frais que nous facturons est notre licence de base.\n\nLes coûts d'infrastructure cloud (calcul, stockage, bande passante) sont facturés directement au client.\nLes clients paient exactement ce qu'ils consomment — pas de marges cachées.\nVous payez pour la valeur que vous recevez, garantissant l'évolutivité : vos coûts n'augmentent qu'avec l'utilisation."
                    ],
                    'it' => [
                        'title' => 'Il nostro modello di pricing trasparente',
                        'description' => "Crediamo in un modello di pricing chiaro ed equo. L'unica tariffa che addebitiamo è quella della licenza base.\n\nI costi dell'infrastruttura cloud (calcolo, storage, larghezza di banda) sono addebitati direttamente al cliente.\nI clienti pagano esattamente ciò che consumano — nessun sovrapprezzo nascosto.\nPaghi per il valore che ricevi garantendo scalabilità: i tuoi costi crescono solo con l'utilizzo."
                    ],
                    'de' => [
                        'title' => 'Unser transparentes Preismodell',
                        'description' => "Wir glauben an ein klares und faires Preismodell. Die einzige Gebühr, die wir erheben, ist unsere Basislizenzgebühr.\n\nCloud-Infrastrukturkosten (Compute, Storage, Bandbreite) werden direkt dem Kunden in Rechnung gestellt.\nKunden zahlen genau das, was sie verbrauchen — keine versteckten Aufschläge.\nSie zahlen für den Wert, den Sie erhalten, und stellen so die Skalierbarkeit sicher: Ihre Kosten steigen nur mit der Nutzung."
                    ]
                ]
            ],
            // Main Section
            [
                'page_name' => 'Value Proposition',
                'slug' => 'value-proposition',
                'section_name' => 'main_section',
                'image' => null,
                'btn_text' => '',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'Value Proposition',
                        'description' => 'Our unique pricing and deployment models offer clear advantages:'
                    ],
                    'fr' => [
                        'title' => 'Proposition de Valeur',
                        'description' => 'Nos modèles uniques de tarification et de déploiement offrent des avantages clairs :'
                    ],
                    'it' => [
                        'title' => 'Proposta di Valore',
                        'description' => 'I nostri modelli unici di pricing e deployment offrono vantaggi chiari:'
                    ],
                    'de' => [
                        'title' => 'Wertangebot',
                        'description' => 'Unsere einzigartigen Preis- und Bereitstellungsmodelle bieten klare Vorteile:'
                    ]
                ],
            ],

            // Sub-section 1
            [
                'page_name' => 'Value Proposition',
                'slug' => 'value-proposition',
                'section_name' => 'aligned_incentives',
                'image' => null,
                'btn_text' => '',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'Aligned Incentives',
                        'description' => 'Our transparent model ensures you have control over your infrastructure spending, so you only pay for what you consume.'
                    ],
                    'fr' => [
                        'title' => 'Incitations Alignées',
                        'description' => 'Notre modèle transparent vous permet de contrôler vos dépenses d’infrastructure, vous ne payez que pour ce que vous consommez.'
                    ],
                    'it' => [
                        'title' => 'Incentivi Allineati',
                        'description' => 'Il nostro modello trasparente ti consente di controllare la spesa per l’infrastruttura, pagando solo ciò che consumi.'
                    ],
                    'de' => [
                        'title' => 'Ausgerichtete Anreize',
                        'description' => 'Unser transparentes Modell stellt sicher, dass Sie Ihre Infrastrukturkosten kontrollieren und nur für das zahlen, was Sie verbrauchen.'
                    ]
                ],
            ],

            // Sub-section 2
            [
                'page_name' => 'Value Proposition',
                'slug' => 'value-proposition',
                'section_name' => 'predictable_pricing',
                'image' => null,
                'btn_text' => '',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'Predictable Pricing',
                        'description' => 'You can rely on our affordable and predictable SaaS pricing for the core software, making budgeting straightforward and free of hidden costs.'
                    ],
                    'fr' => [
                        'title' => 'Tarification Prévisible',
                        'description' => 'Vous pouvez compter sur notre tarification SaaS abordable et prévisible pour le logiciel principal, ce qui facilite la budgétisation sans coûts cachés.'
                    ],
                    'it' => [
                        'title' => 'Prezzi Prevedibili',
                        'description' => 'Puoi fare affidamento sul nostro pricing SaaS accessibile e prevedibile per il software principale, rendendo la pianificazione dei budget semplice e senza costi nascosti.'
                    ],
                    'de' => [
                        'title' => 'Planbare Preise',
                        'description' => 'Sie können sich auf unsere erschwingliche und vorhersehbare SaaS-Preisgestaltung für die Kernsoftware verlassen, wodurch die Budgetplanung einfach und ohne versteckte Kosten ist.'
                    ]
                ],
            ],

            // Sub-section 3
            [
                'page_name' => 'Value Proposition',
                'slug' => 'value-proposition',
                'section_name' => 'scalability_flexibility',
                'image' => null,
                'btn_text' => '',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'Scalability & Flexibility',
                        'description' => 'Our solution is designed to be flexible for both small teams and large enterprises, allowing you to easily scale as your organization grows.'
                    ],
                    'fr' => [
                        'title' => 'Scalabilité & Flexibilité',
                        'description' => 'Notre solution est conçue pour être flexible pour les petites équipes comme pour les grandes entreprises, vous permettant de facilement évoluer avec votre organisation.'
                    ],
                    'it' => [
                        'title' => 'Scalabilità e Flessibilità',
                        'description' => 'La nostra soluzione è progettata per essere flessibile sia per piccoli team sia per grandi aziende, consentendoti di scalare facilmente con la crescita della tua organizzazione.'
                    ],
                    'de' => [
                        'title' => 'Skalierbarkeit & Flexibilität',
                        'description' => 'Unsere Lösung ist so konzipiert, dass sie sowohl für kleine Teams als auch für große Unternehmen flexibel ist, sodass Sie problemlos mit Ihrem Unternehmen wachsen können.'
                    ]
                ],
            ],

            // Sub-section 4
            [
                'page_name' => 'Value Proposition',
                'slug' => 'value-proposition',
                'section_name' => 'brown_age_spots',
                'image' => null,
                'btn_text' => '',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'Brown Spots & Age Spots',
                        'description' => 'By allowing Sursenda to take care of your solution, you avoid the personnel costs and associated investments.'
                    ],
                    'fr' => [
                        'title' => 'Taches Brunes & Taches d’Âge',
                        'description' => 'En laissant Sursenda gérer votre solution, vous évitez les coûts de personnel et les investissements associés.'
                    ],
                    'it' => [
                        'title' => 'Macchie Marroni & Macchie dell’Età',
                        'description' => 'Consentendo a Sursenda di occuparsi della tua soluzione, eviti i costi del personale e gli investimenti associati.'
                    ],
                    'de' => [
                        'title' => 'Braune Flecken & Altersflecken',
                        'description' => 'Indem Sursenda Ihre Lösung übernimmt, vermeiden Sie Personalkosten und damit verbundene Investitionen.'
                    ]
                ],
            ],
            // Main Section: Why Now
            [
                'page_name' => 'Why Now',
                'slug' => 'why-now',
                'section_name' => 'main_section',
                'image' => null,
                'btn_text' => '',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'Why Now',
                        'description' => "A recent Thomson Reuters survey found that legal professionals who use AI tools expect to free up almost 240 hours a year on average.\nThis number represents a significant opportunity for lawyers to reclaim time spent on administrative and non-billable tasks, and instead focus on higher-value client work."
                    ],
                    'fr' => [
                        'title' => 'Pourquoi Maintenant',
                        'description' => "Une enquête récente de Thomson Reuters a révélé que les professionnels du droit utilisant des outils d’IA s’attendent à libérer en moyenne près de 240 heures par an.\nCe chiffre représente une opportunité significative pour les avocats de récupérer le temps consacré aux tâches administratives et non facturables, et de se concentrer sur un travail client à plus forte valeur ajoutée."
                    ],
                    'it' => [
                        'title' => 'Perché Ora',
                        'description' => "Un recente sondaggio di Thomson Reuters ha rilevato che i professionisti legali che utilizzano strumenti di IA prevedono di liberare in media quasi 240 ore all’anno.\nQuesto numero rappresenta un’opportunità significativa per gli avvocati di recuperare il tempo dedicato a compiti amministrativi e non fatturabili, concentrandosi invece su attività a maggior valore per i clienti."
                    ],
                    'de' => [
                        'title' => 'Warum Jetzt',
                        'description' => "Eine aktuelle Thomson Reuters-Umfrage ergab, dass Rechtsanwender, die KI-Tools einsetzen, im Durchschnitt fast 240 Stunden pro Jahr einsparen.\nDiese Zahl stellt eine bedeutende Gelegenheit für Anwälte dar, die Zeit für administrative und nicht abrechenbare Aufgaben zurückzugewinnen und sich stattdessen auf höherwertige Mandantenarbeit zu konzentrieren."
                    ]
                ],
            ],

            // Sub-section 1
            [
                'page_name' => 'Why Now',
                'slug' => 'why-now',
                'section_name' => 'why_now_content1',
                'image' => null,
                'btn_text' => '',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'Up to 240',
                        'description' => 'Time Savings Annually (hours)'
                    ],
                    'fr' => [
                        'title' => 'Jusqu’à 240',
                        'description' => 'Économies de temps annuelles (heures)'
                    ],
                    'it' => [
                        'title' => 'Fino a 240',
                        'description' => 'Risparmio di tempo annuale (ore)'
                    ],
                    'de' => [
                        'title' => 'Bis zu 240',
                        'description' => 'Jährliche Zeitersparnis (Stunden)'
                    ]
                ],
            ],

            // Sub-section 2
            [
                'page_name' => 'Why Now',
                'slug' => 'why-now',
                'section_name' => 'why_now_content2',
                'image' => null,
                'btn_text' => '',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'Up to 240',
                        'description' => 'Time Savings Annually (hours)'
                    ],
                    'fr' => [
                        'title' => 'Jusqu’à 240',
                        'description' => 'Économies de temps annuelles (heures)'
                    ],
                    'it' => [
                        'title' => 'Fino a 240',
                        'description' => 'Risparmio di tempo annuale (ore)'
                    ],
                    'de' => [
                        'title' => 'Bis zu 240',
                        'description' => 'Jährliche Zeitersparnis (Stunden)'
                    ]
                ],
            ],

            // Sub-section 3
            [
                'page_name' => 'Why Now',
                'slug' => 'why-now',
                'section_name' => 'why_now_content3',
                'image' => null,
                'btn_text' => '',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'Up to 240',
                        'description' => 'Time Savings Annually (hours)'
                    ],
                    'fr' => [
                        'title' => 'Jusqu’à 240',
                        'description' => 'Économies de temps annuelles (heures)'
                    ],
                    'it' => [
                        'title' => 'Fino a 240',
                        'description' => 'Risparmio di tempo annuale (ore)'
                    ],
                    'de' => [
                        'title' => 'Bis zu 240',
                        'description' => 'Jährliche Zeitersparnis (Stunden)'
                    ]
                ],
            ],
            [
                'page_name' => 'Get Started',
                'slug' => 'get-started',
                'section_name' => 'main_section',
                'image' => 'uploads/cms/17617996011463849436.jpg',
                'btn_text' => '',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'Ready to Get Started?',
                        'description' => 'Ready to look and feel your best? Book your appointment today or visit our spa for personalized treatments and care!'
                    ],
                    'fr' => [
                        'title' => 'Prêt à Commencer ?',
                        'description' => 'Prêt à être au mieux de votre forme ? Prenez rendez-vous dès aujourd’hui ou venez dans notre spa pour des soins personnalisés !'
                    ],
                    'it' => [
                        'title' => 'Pronto per Iniziare?',
                        'description' => 'Pronto a sentirti e apparire al meglio? Prenota oggi il tuo appuntamento o visita la nostra spa per trattamenti personalizzati!'
                    ],
                    'de' => [
                        'title' => 'Bereit loszulegen?',
                        'description' => 'Bereit, Ihr Bestes zu geben? Buchen Sie noch heute Ihren Termin oder besuchen Sie unser Spa für personalisierte Behandlungen und Pflege!'
                    ],
                ],
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
