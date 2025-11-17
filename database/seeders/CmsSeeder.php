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
                'image' => 'uploads/cms/mission.jpg',
                'btn_text' => '',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'Adaptive Intelligence, Unwavering Trust',
                        'description' => "Your data is exclusively hosted in the European Union, never used for training or product development. We're built on a foundation where data protection isn't just a feature—it's the core of our design.",
                    ],
                    'fr' => [
                        'title' => 'Intelligence Adaptive, Confiance Inébranlable',
                        'description' => "Vos données sont hébergées exclusivement dans l'Union européenne, jamais utilisées pour l'entraînement ou le développement de produits. Nous sommes construits sur une base où la protection des données n'est pas seulement une fonctionnalité — c'est le cœur de notre conception.",
                    ],
                    'de' => [
                        'title' => 'Adaptive Intelligenz, Unerschütterliches Vertrauen',
                        'description' => "Ihre Daten werden ausschließlich in der Europäischen Union gespeichert und niemals für Training oder Produktentwicklung verwendet. Wir basieren auf einem Fundament, bei dem Datenschutz nicht nur eine Funktion ist — er ist das Herzstück unseres Designs.",
                    ],
                    'es' => [
                        'title' => 'Inteligencia Adaptativa, Confianza Inquebrantable',
                        'description' => "Sus datos se alojan exclusivamente en la Unión Europea, nunca se usan para entrenamiento o desarrollo de productos. Estamos construidos sobre una base donde la protección de datos no es solo una característica: es el núcleo de nuestro diseño.",
                    ],
                    'it' => [
                        'title' => 'Intelligenza Adattiva, Fiducia Incondizionata',
                        'description' => "I tuoi dati sono ospitati esclusivamente nell'Unione Europea e non vengono mai utilizzati per formazione o sviluppo del prodotto. Siamo costruiti su una base in cui la protezione dei dati non è solo una funzionalità: è il cuore del nostro design.",
                    ],

                ]
            ],
            // 🟩 3. Mission Section
            [
                'page_name' => 'ProblemMissionSolution',
                'slug' => 'mission-section',
                'section_name' => 'mission_section',
                'image' => 'uploads/cms/problem.jpg',
                'btn_text' => '',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'From Assistant to Partner',
                        'description' => "Our product is not a simple tool, but a proactive partner. It enables custom context selection to fit your unique needs, helping you make informed decisions and work more efficiently by providing traceable insights.",
                    ],
                    'fr' => [
                        'title' => 'De l’Assistant au Partenaire',
                        'description' => "Notre produit n'est pas un simple outil, mais un partenaire proactif. Il permet une sélection de contexte personnalisée pour répondre à vos besoins uniques, vous aidant à prendre des décisions éclairées et à travailler plus efficacement en fournissant des informations traçables.",
                    ],
                    'de' => [
                        'title' => 'Vom Assistenten zum Partner',
                        'description' => "Unser Produkt ist kein einfaches Werkzeug, sondern ein proaktiver Partner. Es ermöglicht die Auswahl eines individuellen Kontexts, der auf Ihre einzigartigen Bedürfnisse zugeschnitten ist, und hilft Ihnen, fundierte Entscheidungen zu treffen und effizienter zu arbeiten, indem es nachvollziehbare Einblicke liefert.",
                    ],
                    'es' => [
                        'title' => 'De Asistente a Socio',
                        'description' => "Nuestro producto no es una herramienta simple, sino un socio proactivo. Permite la selección de contexto personalizada para adaptarse a sus necesidades únicas, ayudándole a tomar decisiones informadas y a trabajar de manera más eficiente proporcionando información trazable.",
                    ],
                    'it' => [
                        'title' => 'Da Assistente a Partner',
                        'description' => "Il nostro prodotto non è un semplice strumento, ma un partner proattivo. Consente la selezione di contesti personalizzati per soddisfare le tue esigenze uniche, aiutandoti a prendere decisioni informate e a lavorare più efficacemente fornendo informazioni tracciabili.",
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
                        'title' => 'Engineered for Excellence',
                        'description' => "We combine advanced machine learning and natural language processing with flexible, secure integration, delivering a powerful AI knowledge assistant for organizations with the highest demands for security and performance.",
                    ],
                    'fr' => [
                        'title' => 'Conçu pour l’Excellence',
                        'description' => "Nous combinons l'apprentissage automatique avancé et le traitement du langage naturel avec une intégration flexible et sécurisée, offrant un assistant de connaissance IA puissant pour les organisations ayant les exigences les plus élevées en matière de sécurité et de performance.",
                    ],
                    'de' => [
                        'title' => 'Für Exzellenz Entwickelt',
                        'description' => "Wir kombinieren fortschrittliches maschinelles Lernen und natürliche Sprachverarbeitung mit flexibler, sicherer Integration und liefern einen leistungsstarken KI-Wissensassistenten für Organisationen mit den höchsten Anforderungen an Sicherheit und Leistung.",
                    ],
                    'es' => [
                        'title' => 'Diseñado para la Excelencia',
                        'description' => "Combinamos aprendizaje automático avanzado y procesamiento del lenguaje natural con integración flexible y segura, ofreciendo un potente asistente de conocimiento AI para organizaciones con las más altas exigencias de seguridad y rendimiento.",
                    ],
                    'it' => [
                        'title' => 'Progettato per l’Eccellenza',
                        'description' => "Combiniamo apprendimento automatico avanzato e elaborazione del linguaggio naturale con integrazione flessibile e sicura, fornendo un potente assistente di conoscenza AI per organizzazioni con le più elevate esigenze di sicurezza e prestazioni.",
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
                        'title' => '48,000',
                        'description' => 'Average Savings per Lawyer per Year (CHF)',
                    ],
                    'fr' => [
                        'title' => '48 000',
                        'description' => 'Économies moyennes par avocat et par an (CHF)',
                    ],
                    'it' => [
                        'title' => '48.000',
                        'description' => 'Risparmio medio per avvocato all’anno (CHF)',
                    ],
                    'de' => [
                        'title' => '48.000',
                        'description' => 'Durchschnittliche Einsparung pro Anwalt und Jahr (CHF)',
                    ],
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
                        'title' => '14M',
                        'description' => 'Up to Annual Savings (CHF)',
                    ],
                    'fr' => [
                        'title' => '14 M',
                        'description' => 'Jusqu’à économies annuelles (CHF)',
                    ],
                    'it' => [
                        'title' => '14 M',
                        'description' => 'Fino a risparmi annuali (CHF)',
                    ],
                    'de' => [
                        'title' => '14 Mio.',
                        'description' => 'Bis zu jährliche Einsparungen (CHF)',
                    ],
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
            // Main Section: Our Product
            [
                'page_name' => 'Our Product',
                'slug' => 'our-product',
                'section_name' => 'main_section',
                'image' => null,
                'btn_text' => '',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'Roadmap at a glance',
                        'description' => "To empower knowledge-driven organizations by providing a secure and intelligent AI assistant that transforms corporate data into actionable insights, fostering efficiency and innovation with unwavering trust and data privacy."
                    ],
                    'fr' => [
                        'title' => 'Feuille de route en un coup d’œil',
                        'description' => "Donner les moyens aux organisations axées sur la connaissance grâce à un assistant IA sécurisé et intelligent qui transforme les données d’entreprise en informations exploitables, favorisant l’efficacité et l’innovation avec une confiance et une confidentialité inébranlables."
                    ],
                    'it' => [
                        'title' => 'Tabella di marcia a colpo d’occhio',
                        'description' => "Potenziare le organizzazioni basate sulla conoscenza fornendo un assistente AI sicuro e intelligente che trasforma i dati aziendali in informazioni utilizzabili, promuovendo efficienza e innovazione con fiducia e privacy dei dati incrollabili."
                    ],
                    'de' => [
                        'title' => 'Fahrplan auf einen Blick',
                        'description' => "Wissensgetriebene Organisationen stärken, indem ein sicherer und intelligenter KI-Assistent bereitgestellt wird, der Unternehmensdaten in umsetzbare Erkenntnisse verwandelt – und Effizienz sowie Innovation mit unerschütterlichem Vertrauen und Datenschutz fördert."
                    ],
                ],
            ],

            // MVP Section
            [
                'page_name' => 'Our Product',
                'slug' => 'our-product',
                'section_name' => 'mvp_section',
                'image' => 'uploads/cms/17618122301377063983.jpg',
                'btn_text' => '',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'MVP - Ready NOW',
                        'description' => "Our current product is ready for you to use and includes chat functionality, table-based analysis, and advanced security with strict compliance controls."
                    ],
                    'fr' => [
                        'title' => 'MVP - Prêt MAINTENANT',
                        'description' => "Notre produit actuel est prêt à être utilisé et inclut des fonctionnalités de chat, une analyse basée sur des tableaux et une sécurité avancée avec des contrôles de conformité stricts."
                    ],
                    'it' => [
                        'title' => 'MVP - Pronto ORA',
                        'description' => "Il nostro prodotto attuale è pronto per l’uso e include funzionalità di chat, analisi basata su tabelle e sicurezza avanzata con rigorosi controlli di conformità."
                    ],
                    'de' => [
                        'title' => 'MVP - Jetzt bereit',
                        'description' => "Unser aktuelles Produkt ist einsatzbereit und umfasst Chat-Funktionen, tabellenbasierte Analysen sowie erweiterte Sicherheit mit strengen Compliance-Kontrollen."
                    ],
                ],
            ],

            // V1 Section
            [
                'page_name' => 'Our Product',
                'slug' => 'our-product',
                'section_name' => 'v1_section',
                'image' => 'uploads/cms/1761812505110249280.png',
                'btn_text' => '',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'V1',
                        'description' => "We will introduce shared workspaces for real-time collaboration, comprehensive reporting, and a smart template library to streamline your workflows."
                    ],
                    'fr' => [
                        'title' => 'V1',
                        'description' => "Nous introduirons des espaces de travail partagés pour la collaboration en temps réel, des rapports complets et une bibliothèque de modèles intelligents pour rationaliser vos flux de travail."
                    ],
                    'it' => [
                        'title' => 'V1',
                        'description' => "Introdurremo spazi di lavoro condivisi per la collaborazione in tempo reale, report completi e una libreria di modelli intelligenti per semplificare i tuoi flussi di lavoro."
                    ],
                    'de' => [
                        'title' => 'V1',
                        'description' => "Wir werden gemeinsame Arbeitsbereiche für die Zusammenarbeit in Echtzeit, umfassendes Reporting und eine intelligente Vorlagenbibliothek einführen, um Ihre Arbeitsabläufe zu optimieren."
                    ],
                ],
            ],
            // Future Enhancements Section
            [
                'page_name' => 'Our Product',
                'slug' => 'our-product',
                'section_name' => 'future_enhancements_section',
                'image' => 'uploads/cms/17618125881214229311.png',
                'btn_text' => '',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'Future Enhancements',
                        'description' => "Future versions will focus on even greater analytical depth and the ability for customers to create and manage their own custom templates."
                    ],
                    'fr' => [
                        'title' => 'Améliorations Futures',
                        'description' => "Les versions futures se concentreront sur une profondeur analytique encore plus grande et sur la possibilité pour les clients de créer et de gérer leurs propres modèles personnalisés."
                    ],
                    'it' => [
                        'title' => 'Miglioramenti Futuri',
                        'description' => "Le versioni future si concentreranno su una maggiore profondità analitica e sulla possibilità per i clienti di creare e gestire i propri modelli personalizzati."
                    ],
                    'de' => [
                        'title' => 'Zukünftige Erweiterungen',
                        'description' => "Zukünftige Versionen werden sich auf eine noch größere analytische Tiefe und die Möglichkeit konzentrieren, dass Kunden ihre eigenen benutzerdefinierten Vorlagen erstellen und verwalten können."
                    ],
                ],
            ],
            // Main Section: Future Features - Core Integration
            [
                'page_name' => 'Our Product',
                'slug' => 'our-product',
                'section_name' => 'future_features_core_integration_main',
                'image' => null,
                'btn_text' => '',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'Future Features: Core Integration',
                        'description' => 'Upcoming core capabilities designed to ensure deep integration with your existing enterprise systems for seamless collaboration and secure operations.',
                    ],
                    'fr' => [
                        'title' => 'Fonctionnalités Futures : Intégration Principale',
                        'description' => 'Fonctionnalités principales à venir conçues pour garantir une intégration profonde avec vos systèmes d’entreprise existants, favorisant une collaboration fluide et une sécurité optimale.',
                    ],
                    'it' => [
                        'title' => 'Funzionalità Future: Integrazione Core',
                        'description' => 'Prossime funzionalità principali progettate per garantire un’integrazione profonda con i sistemi aziendali esistenti per una collaborazione fluida e sicura.',
                    ],
                    'de' => [
                        'title' => 'Zukünftige Funktionen: Kernintegration',
                        'description' => 'Künftige Kernfunktionen, die eine tiefgehende Integration mit Ihren bestehenden Unternehmenssystemen für nahtlose Zusammenarbeit und sichere Abläufe gewährleisten.',
                    ],
                ],
            ],

            // Sub-section 1: DMS Integration
            [
                'page_name' => 'Our Product',
                'slug' => 'our-product',
                'section_name' => 'future_features_dms_integration',
                'image' => null,
                'btn_text' => '',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'DMS Integration',
                        'description' => "Seamless integration with customer's own Document Management System (DMS).",
                    ],
                    'fr' => [
                        'title' => 'Intégration DMS',
                        'description' => "Intégration transparente avec le propre système de gestion documentaire (DMS) du client.",
                    ],
                    'it' => [
                        'title' => 'Integrazione DMS',
                        'description' => "Integrazione perfetta con il sistema di gestione documentale (DMS) del cliente.",
                    ],
                    'de' => [
                        'title' => 'DMS-Integration',
                        'description' => "Nahtlose Integration mit dem eigenen Dokumentenmanagementsystem (DMS) des Kunden.",
                    ],
                ],
            ],

            // Sub-section 2: Secure Data Access
            [
                'page_name' => 'Our Product',
                'slug' => 'our-product',
                'section_name' => 'future_features_secure_data_access',
                'image' => null,
                'btn_text' => '',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'Secure Data Access',
                        'description' => "Secure data access and indexing with your own infrastructure.",
                    ],
                    'fr' => [
                        'title' => 'Accès Sécurisé aux Données',
                        'description' => "Accès sécurisé aux données et indexation via votre propre infrastructure.",
                    ],
                    'it' => [
                        'title' => 'Accesso Sicuro ai Dati',
                        'description' => "Accesso e indicizzazione sicuri dei dati tramite la tua infrastruttura.",
                    ],
                    'de' => [
                        'title' => 'Sicherer Datenzugriff',
                        'description' => "Sicherer Datenzugriff und Indexierung mit Ihrer eigenen Infrastruktur.",
                    ],
                ],
            ],

            // Sub-section 3: Single Source of Truth
            [
                'page_name' => 'Our Product',
                'slug' => 'our-product',
                'section_name' => 'future_features_single_source_of_truth',
                'image' => null,
                'btn_text' => '',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'Single Source of Truth',
                        'description' => "Single source of truth for enterprise documents using your own infrastructure.",
                    ],
                    'fr' => [
                        'title' => 'Source Unique de Vérité',
                        'description' => "Source unique de vérité pour les documents d’entreprise utilisant votre propre infrastructure.",
                    ],
                    'it' => [
                        'title' => 'Fonte Unica di Verità',
                        'description' => "Fonte unica di verità per i documenti aziendali utilizzando la tua infrastruttura.",
                    ],
                    'de' => [
                        'title' => 'Einzige Wahrheitsquelle',
                        'description' => "Einzige Quelle der Wahrheit für Unternehmensdokumente mit Ihrer eigenen Infrastruktur.",
                    ],
                ],
            ],

            // Sub-section 4: Office Integration
            [
                'page_name' => 'Our Product',
                'slug' => 'our-product',
                'section_name' => 'future_features_office_integration',
                'image' => null,
                'btn_text' => '',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'Office Integration',
                        'description' => "Integration with your in-house Office solution for templating and document generation.",
                    ],
                    'fr' => [
                        'title' => 'Intégration Office',
                        'description' => "Intégration avec votre solution Office interne pour la création de modèles et la génération de documents.",
                    ],
                    'it' => [
                        'title' => 'Integrazione Office',
                        'description' => "Integrazione con la tua soluzione Office interna per la creazione di modelli e la generazione di documenti.",
                    ],
                    'de' => [
                        'title' => 'Office-Integration',
                        'description' => "Integration mit Ihrer internen Office-Lösung für Vorlagenerstellung und Dokumentengenerierung.",
                    ],
                ],
            ],

            // Main Section: Our Solution, Your Way
            [
                'page_name' => 'Our Product',
                'slug' => 'our-product',
                'section_name' => 'our_solution_main',
                'image' => null,
                'btn_text' => '',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'Our Solution, Your Way',
                        'description' => "We believe a product should evolve to fit your needs, not the other way around. We're committed to building a platform that's the perfect fit for your organization.",
                    ],
                    'fr' => [
                        'title' => 'Notre Solution, À Votre Façon',
                        'description' => "Nous croyons qu’un produit doit évoluer pour répondre à vos besoins, et non l’inverse. Nous nous engageons à construire une plateforme parfaitement adaptée à votre organisation.",
                    ],
                    'it' => [
                        'title' => 'La Nostra Soluzione, a Modo Tuo',
                        'description' => "Crediamo che un prodotto debba evolversi per adattarsi alle tue esigenze, e non il contrario. Ci impegniamo a costruire una piattaforma perfetta per la tua organizzazione.",
                    ],
                    'de' => [
                        'title' => 'Unsere Lösung, Ihr Weg',
                        'description' => "Wir glauben, dass ein Produkt sich an Ihre Bedürfnisse anpassen sollte, nicht umgekehrt. Wir verpflichten uns, eine Plattform zu entwickeln, die perfekt zu Ihrer Organisation passt.",
                    ],
                ],
            ],

            // Sub-section 1: Tell us about your challenges
            [
                'page_name' => 'Our Product',
                'slug' => 'our-product',
                'section_name' => 'our_solution_challenges',
                'image' => null,
                'btn_text' => '',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'Tell us about your challenges',
                        'description' => "We are here to understand your most complex workflows and learn how our platform can evolve to meet your specific needs.",
                    ],
                    'fr' => [
                        'title' => 'Parlez-nous de vos défis',
                        'description' => "Nous sommes là pour comprendre vos flux de travail les plus complexes et voir comment notre plateforme peut évoluer pour répondre à vos besoins spécifiques.",
                    ],
                    'it' => [
                        'title' => 'Raccontaci le tue sfide',
                        'description' => "Siamo qui per comprendere i tuoi flussi di lavoro più complessi e capire come la nostra piattaforma possa evolversi per soddisfare le tue esigenze specifiche.",
                    ],
                    'de' => [
                        'title' => 'Erzählen Sie uns von Ihren Herausforderungen',
                        'description' => "Wir möchten Ihre komplexesten Workflows verstehen und herausfinden, wie unsere Plattform sich entwickeln kann, um Ihre spezifischen Anforderungen zu erfüllen.",
                    ],
                ],
            ],

            // Sub-section 2: Help us refine our solution
            [
                'page_name' => 'Our Product',
                'slug' => 'our-product',
                'section_name' => 'our_solution_refine',
                'image' => null,
                'btn_text' => '',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'Help us refine our solution',
                        'description' => "We'll work with you to ensure our product integrates seamlessly into your current ecosystem, transforming your corporate data into actionable insights for everyone.",
                    ],
                    'fr' => [
                        'title' => 'Aidez-nous à affiner notre solution',
                        'description' => "Nous travaillerons avec vous pour garantir que notre produit s’intègre parfaitement à votre écosystème actuel, transformant vos données d’entreprise en informations exploitables pour tous.",
                    ],
                    'it' => [
                        'title' => 'Aiutaci a perfezionare la nostra soluzione',
                        'description' => "Lavoreremo con te per garantire che il nostro prodotto si integri perfettamente nel tuo ecosistema attuale, trasformando i dati aziendali in informazioni utili per tutti.",
                    ],
                    'de' => [
                        'title' => 'Helfen Sie uns, unsere Lösung zu verfeinern',
                        'description' => "Wir arbeiten mit Ihnen zusammen, um sicherzustellen, dass unser Produkt nahtlos in Ihr aktuelles Ökosystem integriert wird und Ihre Unternehmensdaten für alle in umsetzbare Erkenntnisse verwandelt.",
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
