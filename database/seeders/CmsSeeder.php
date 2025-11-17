<?php

namespace Database\Seeders;

use App\Models\Cms;
use App\Models\CmsTranslation;
use App\Models\Translation;
use Illuminate\Database\Seeder;

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
                        'description' => "Our vision is simple: we’re pioneering the future Of intelligent assistance.
                        We develop the leading AI-powered Knowledge Assistant, specifically engineered for companies that demand heightened security and absolute data privacy.
                        Our product is not just an assistant — it's a proactive partner designed to fit your workflow, helping you make informed decisions faster with traceable, data-driven insights."
                    ],
                    'fr' => [
                        'title' => 'À propos de nous        ',
                        'sub_title' => 'À propos de Sursenda',
                        'description' => "Notre vision est simple\u{00A0}: nous innovons pour l'avenir de l'assistance intelligente.
                        Nous développons l'assistant de connaissances leader, basé sur l'IA, spécialement conçu pour les entreprises qui exigent une sécurité renforcée et une confidentialité absolue des données.
                        Notre produit n'est pas un simple assistant\u{00A0}; c'est un partenaire proactif conçu pour s'adapter à votre flux de travail, vous aidant à prendre des décisions éclairées plus rapidement grâce à des informations traçables et basées sur les données."
                    ],
                    'it' => [
                        'title' => 'Chi siamo',
                        'sub_title' => 'Informazioni su Sursenda',
                        'description' => "La nostra visione è semplice: siamo pionieri del futuro dell'assistenza intelligente.
                        Sviluppiamo il Knowledge Assistant leader basato sull'intelligenza artificiale, specificamente progettato per le aziende che richiedono maggiore sicurezza e assoluta riservatezza dei dati.
                        Il nostro prodotto non è solo un assistente: è un partner proattivo progettato per adattarsi al tuo flusso di lavoro, aiutandoti a prendere decisioni informate più rapidamente con informazioni tracciabili e basate sui dati."
                    ],
                    'de' => [
                        'title' => 'Über uns',
                        'sub_title' => 'Sursenda GmbH',
                        'description' => 'Unsere Vision ist einfach: nahtlose, intelligente und zutiefst personalisierte Interaktionen zu ermöglichen, die den Zugriff auf und die Nutzung von Informationen grundlegend verändern.

Unsere Lösung basiert auf zwei zentralen Pfeilern:

• Adaptive Intelligenz:
  Massgeschneiderte Lösungen, insbesondere für den Rechts- und Medizinbereich.

• Unerschütterliches Vertrauen:
  Unser kompromissloses Bekenntnis zum Datenschutz.'
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
                        'description' => 'To empower knowledge-driven organizations by providing a secure and intelligent Al assistant that
                        transforms corporate data into actionable insights,
                        fostering efficiency and innovation with
                        unwavering trust and data privacy.',
                        'sub_title' => 'Why Sursenda',
                        'sub_description' => 'Platforms like Thomson Reuters and Harvey AI are essential
                        in legal research, our approach gives you unparalleled control
                        by allowing you to dynamically select your own data sources
                        and perform powerful, large-scale, reproducible analysis
                        through an intuitive table-based interface that ensures
                        compliance with the Swiss Data Governance laws.'
                    ],
                    'fr' => [
                        'title' => 'Sursenda GmbH',
                        'description' => "Pour donner aux organisations axées sur la connaissance les moyens d'agir en leur fournissant un assistant d'IA sécurisé et intelligent qui transforme les données d'entreprise en informations exploitables, favorisant ainsi l'efficacité et l'innovation avec une confiance inébranlable et la confidentialité des données.",
                        'sub_title' => 'Pourquoi Sursenda',
                        'sub_description' => "Des plateformes comme Thomson Reuters et Harvey AI sont essentielles
                        en recherche juridique. Notre approche vous offre un contrôle inégalé
                        en vous permettant de sélectionner dynamiquement vos propres sources de données
                        et d'effectuer des analyses puissantes, à grande échelle et reproductibles
                        grâce à une interface intuitive basée sur des tableaux, garantissant
                        la conformité avec la législation suisse sur la gouvernance des données."
                    ],
                    'it' => [
                        'title' => 'Sursenda GmbH',
                        'description' => 'Per potenziare le organizzazioni basate sulla conoscenza fornendo un assistente AI sicuro e intelligente che
                        trasforma i dati aziendali in informazioni fruibili,
                        promuovendo efficienza e innovazione con fiducia e riservatezza dei dati incrollabili.',
                        'sub_title' => 'Perché Sursenda',
                        'sub_description' => "Piattaforme come Thomson Reuters e Harvey AI sono essenziali
                        nella ricerca legale, il nostro approccio vi offre un controllo senza pari
                        permettendovi di selezionare dinamicamente le vostre fonti di dati
                        ed eseguire analisi potenti, su larga scala e riproducibili
                        attraverso un'interfaccia intuitiva basata su tabelle che garantisce
                        la conformità alle leggi svizzere sulla governance dei dati."
                    ],
                    'de' => [
                        'title' => 'Sursenda GmbH',
                        'description' => 'Wir stärken Ihre Organisation durch die Bereitstellung eines sicheren und intelligenten  Assistenten, der Ihre Unternehmensdaten in umsetzbare Erkenntnisse umwandelt und so  Effizienz und Innovation mit unerschütterlichen Vertrauen und Datenschutz fördert.',
                        'sub_title' => ' Speziallösungen für Recht & Medizin',
                        'sub_description' => 'Unsere junge, energische Herangehensweise bringt eine frische Perspektive in jede  Herausforderung. Wir entwickeln Lösungen, die über die reine Funktionalität hinausgehen,  unser Assistent ist Ihr proaktiver Partner und unverzichtbarer Informationsgeber. Wir nutzen  diesen Enthusiasmus, um Lösungen zu entwickeln, die über die reine Funktionalität  hinausgehen und ein Höchstmass an Intelligenz und Personalisierung bieten. Wir verstehen  unseren Assistenten als proaktiven Partner und unverzichtbaren Informationsgeber.'
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
                        'description' => 'We are a dynamic and driven team united by a shared mission — to develop the leading AI-powered Knowledge Assistant, combining diverse expertise from backend engineering to legal and cloud technologies.'
                    ],
                    'fr' => [
                        'title' => 'Rencontrez notre équipe',
                        'description' => 'Nous sommes une équipe dynamique et motivée, unie par une mission commune : développer l’assistant de connaissance alimenté par l’IA le plus performant, en combinant des compétences diverses en ingénierie backend, droit et technologies cloud.'
                    ],
                    'it' => [
                        'title' => 'Incontra il nostro team',
                        'description' => 'Siamo un team dinamico e motivato, unito da una missione comune: sviluppare il principale assistente alla conoscenza basato su IA, combinando competenze che spaziano dall’ingegneria backend al diritto e alle tecnologie cloud.'
                    ],
                    'de' => [
                        'title' => 'Lernen Sie unser Team kennen',
                        'description' => 'Wir sind ein dynamisches und engagiertes Team, das die gemeinsame Mission hat, den führenden KI-gestützten Wissensassistenten zu entwickeln und dabei vielfältiges Fachwissen von Backend-Engineering bis hin zu Rechts- und Cloud-Technologien einzubringen. '
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
                        'title' => 'Le problème – Notre mission – La solution',
                        'description' => 'Transformer les vrais défis en solutions significatives et centrées sur l’humain.',
                    ],
                    'it' => [
                        'title' => 'Il Problema – La Nostra Missione – La Soluzione',
                        'description' => "Trasformare le sfide reali in soluzioni significative e incentrate sull'uomo.",
                    ],
                    'de' => [
                        'title' => 'Das Problem – Unsere Mission – Die Lösung',
                        'description' => 'Echte Herausforderungen in sinnvolle, menschenzentrierte Lösungen umwandeln.',
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
                        'title' => "D'assistant à associé",
                        'description' => "Notre produit n'est pas un simple outil, mais un partenaire proactif. Il permet une sélection de contexte personnalisée adaptée à vos besoins spécifiques, vous aidant à prendre des décisions éclairées et à travailler plus efficacement grâce à des informations traçables.",
                    ],
                    
                    'de' => [
                        'title' => 'Vom Assistenten zum Partner',
                        'description' => 'Wallee ist mehr als nur ein Werkzeug, es ist Ihr proaktiver Partner. Dank individueller  Kontextauswahl liefert es präzise, nachvollziehbare Erkenntnisse, die genau Ihren  Anforderungen entsprechen. So treffen Sie fundierte Entscheidungen und steigern Ihre Effizienz  sofort.',
                    ],
                    'it' => [
                        'title' => 'Da assistente a partner',
                        'description' => 'Il nostro prodotto non è un semplice strumento, ma un partner proattivo. Permette di selezionare contesti personalizzati in base alle vostre esigenze specifiche, aiutandovi a prendere decisioni consapevoli e a lavorare in modo più efficiente, fornendo informazioni tracciabili.',
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
                        'description' => 'Our product is not a simple tool, but a proactive partner. It enables custom context selection to fit your unique needs, helping you make informed decisions and work more efficiently by providing traceable insights.',
                    ],
                    'fr' => [
                        'title' => 'Intelligence adaptative, confiance inébranlable',
                        'description' => "Vos données sont hébergées exclusivement dans l'Union européenne et ne sont jamais utilisées à des fins de formation ou de développement produit. La protection des données est au cœur de notre conception et non pas une simple fonctionnalité.",
                    ],
                    'de' => [
                        'title' => 'Adaptive Intelligenz, unerschütterliches Vertrauen',
                        'description' => 'Wir schützen Ihre Daten mit den höchsten Standards an Integrität und Datenschutz. Wir  garantieren, dass alle Benutzerinformationen ausschliesslich innerhalb der Europäischen Union  gehostet werden oder, auf Wunsch, nur innerhalb der Schweiz. Ihre Daten gehören Ihnen allein  und werden niemals für Testzwecke oder Produktverbesserungen verwendet.',
                    ],
                    
                    'it' => [
                        'title' => 'Intelligenza adattiva, fiducia incrollabile',
                        'description' => "I tuoi dati sono ospitati esclusivamente nell'Unione Europea e non vengono mai utilizzati per la formazione o lo sviluppo di prodotti. La nostra azienda si fonda su una base in cui la protezione dei dati non è solo una caratteristica, ma il fulcro del nostro progetto.",
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
                        'description' => 'We combine advanced machine learning and natural language processing with flexible, secure integration, delivering a powerful AI knowledge assistant for organizations with the highest demands for security and performance.',
                    ],
                    'fr' => [
                        'title' => "Conçu pour l'excellence",
                        'description' => "Nous combinons l'apprentissage automatique avancé et le traitement du langage naturel avec une intégration flexible et sécurisée, offrant un puissant assistant de connaissances IA pour les organisations ayant les exigences les plus élevées en matière de sécurité et de performances.",
                    ],
                    'de' => [
                        'title' => 'Für Spitzenleistungen entwickelt',
                        'description' => 'Wir kombinieren fortschrittliches maschinelles Lernen und natürliche Sprachverarbeitung mit flexibler, sicherer Integration und liefern einen leistungsstarken KI-Wissensassistenten für Organisationen mit den höchsten Anforderungen an Sicherheit und Leistung.',
                    ],
                    'it' => [
                        'title' => "Progettato per l'eccellenza",
                        'description' => "Combiniamo apprendimento automatico avanzato ed elaborazione del linguaggio naturale con un'integrazione flessibile e sicura, offrendo un potente assistente di conoscenza basato sull'intelligenza artificiale per le organizzazioni con le massime esigenze di sicurezza e prestazioni.",
                    ],
                ]
            ],
            // 🟥 Pricing Section
            [
                'page_name' => 'Pricing',
                'slug' => 'pricing-section',
                'section_name' => 'pricing_section',
                'image' => null,
                'btn_text' => '',
                'btn_url' => '#',
                'status' => 1,
                'translations' => [
                    'en' => [
                        'title' => 'Our Transparent Pricing Model',
                        'description' => 'We believe in a clear and fair pricing model. The only fee we charge is our core licensing fee.

                        Cloud infrastructure costs (compute, storage, bandwidth) are billed directly to the customer.
                        Customers pay exactly what they consume — no hidden markups.
                        You pay for the value you receive ensuring scalability: your costs grow only with usage.'
                    ],
                    'fr' => [
                        'title' => 'Notre modèle de tarification transparent',
                        'description' => "Nous privilégions un modèle de tarification clair et équitable. Les seuls frais facturés sont nos frais de licence de base.

                        Les coûts d'infrastructure cloud (calcul, stockage, bande passante) sont facturés directement au client.
                        Les clients paient exactement ce qu'ils consomment, sans majoration cachée.
                        Vous payez pour la valeur que vous recevez, garantissant ainsi l'évolutivité\u{00A0}: vos coûts augmentent avec l'utilisation."
                    ],
                    'it' => [
                        'title' => 'Il nostro modello di prezzi trasparente',
                        'description' => "Crediamo in un modello di prezzo chiaro ed equo. L'unica tariffa che addebitiamo è la nostra licenza base. \n

                        I costi dell'infrastruttura cloud (elaborazione, storage, larghezza di banda) vengono fatturati direttamente al cliente.
                        I clienti pagano esattamente ciò che consumano, senza maggiorazioni nascoste.
                        Paghi per il valore che ricevi, garantendo scalabilità: i tuoi costi aumentano solo con l'utilizzo."
                    ],
                    'de' => [
                        'title' => 'Unser transparentes Preismodell',
                        'description' => 'Wir setzen auf ein klares und faires Preismodell. Wir erheben lediglich unsere Basislizenzgebühr.

                        Die Kosten für die Cloud-Infrastruktur (Rechenleistung, Speicher, Bandbreite) werden direkt dem Kunden in Rechnung gestellt.
                        Kunden zahlen genau das, was sie verbrauchen – keine versteckten Aufschläge.
                        Sie zahlen für den Wert, den Sie erhalten, und gewährleisten so Skalierbarkeit: Ihre Kosten steigen nur mit der Nutzung.'
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
                        'title' => 'Proposition de valeur',
                        'description' => "Nos modèles de tarification et de déploiement uniques offrent des avantages évidents\u{00A0}:"
                    ],
                    'it' => [
                        'title' => 'Proposta di valore',
                        'description' => 'I nostri esclusivi modelli di determinazione dei prezzi e di distribuzione offrono chiari vantaggi:'
                    ],
                    'de' => [
                        'title' => 'Wertversprechen',
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
                        'title' => 'Incitations alignées',
                        'description' => "Notre modèle transparent vous garantit le contrôle de vos dépenses d'infrastructure, vous ne payez donc que ce que vous consommez."
                    ],
                    'it' => [
                        'title' => 'Incentivi allineati',
                        'description' => 'Il nostro modello trasparente ti garantisce il controllo sulla spesa per le infrastrutture, così paghi solo ciò che consumi.'
                    ],
                    'de' => [
                        'title' => 'Abgestimmte Anreize',
                        'description' => 'Unser transparentes Modell stellt sicher, dass Sie die Kontrolle über Ihre Infrastrukturausgaben haben, sodass Sie nur für das bezahlen, was Sie verbrauchen.'
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
                        'title' => 'Tarification prévisible',
                        'description' => 'Vous pouvez compter sur nos tarifs SaaS abordables et prévisibles pour le logiciel de base, ce qui rend la budgétisation simple et sans coûts cachés.'
                    ],
                    'it' => [
                        'title' => 'Scalabilità e flessibilità',
                        'description' => 'La nostra soluzione è progettata per essere flessibile sia per i piccoli team che per le grandi aziende, consentendoti di scalare facilmente man mano che la tua organizzazione cresce.'
                    ],
                    
                    'de' => [
                        'title' => 'Vorhersehbare Preise',
                        'description' => 'Sie können sich auf unsere günstigen und vorhersehbaren SaaS-Preise für die Kernsoftware verlassen, wodurch die Budgetierung unkompliziert und frei von versteckten Kosten ist.'
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
                        'title' => 'Évolutivité et flexibilité',
                        'description' => "Notre solution est conçue pour être flexible aussi bien pour les petites équipes que pour les grandes entreprises, vous permettant d'évoluer facilement à mesure que votre organisation se développe."
                    ],

                    'it' => [
                        'title' => 'Prezzi prevedibili',
                        'description' => 'Puoi contare sui nostri prezzi SaaS convenienti e prevedibili per il software principale, rendendo la definizione del budget semplice e priva di costi nascosti.s'
                    ],
                    
                    'de' => [
                        'title' => 'Skalierbarkeit und Flexibilität',
                        'description' => 'Unsere Lösung ist flexibel und eignet sich sowohl für kleine Teams als auch für große Unternehmen. So können Sie problemlos skalieren, wenn Ihr Unternehmen wächst.'
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
                        'title' => 'Taches brunes et taches de vieillesse',
                        'description' => 'En laissant Sursenda s’occuper de votre solution, vous évitez les frais de personnel et les investissements associés.'
                    ],
                    'it' => [
                        'title' => "Macchie marroni e macchie dell'età",
                        'description' => 'Affidando a Sursenda la gestione della tua soluzione, eviterai i costi del personale e gli investimenti associati.'
                    ],
                    'de' => [
                        'title' => 'Kein Risiko, volle Entlastung',
                        'description' => 'Eliminieren Sie hohe Personal- und Entwicklungskosten mit der KI-Lösung von Sursenda. Sie  vermeiden den Aufbau komplexer Infrastrukturen und profitieren Sie von unserer  Expertenplattform ohne internes Risiko und ohne langwierige Vorabinvestitionen.'
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
                        'title' => 'Perché adesso',
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
                        'title' => 'Prêt à commencer ?',
                        'description' => "Prêt à vous sentir au mieux de votre forme ? Prenez rendez-vous dès aujourd'hui ou visitez notre spa pour des soins et traitements personnalisés !"
                    ],
                    'it' => [
                        'title' => 'Pronti per iniziare?',
                        'description' => 'Pronta a sentirti e apparire al meglio? Prenota subito il tuo appuntamento o visita la nostra spa per trattamenti e cure personalizzati!'
                    ],
                    'de' => [
                        'title' => 'Bereit loszulegen?',
                        'description' => 'Sind Sie bereit für den nächsten Schritt? Erfahren Sie, wie unser KI-Assistent Ihre täglichen. Abläufe transformieren kann. Wir freuen uns auf Ihre Kontaktaufnahme! Datenschutzhinweis Wir nutzen Ihre Angaben ausschliesslich zur Beantwortung Ihrer Anfrage. Die VerarbeitungIhrer Daten erfolgt streng nach DSG/DSGVO-Standards. Details finden Sie in unserer[Datenschutzerklärung] (or: [Privacy Policy]) .'
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
                        'description' => 'To empower knowledge-driven organizations by providing a secure and intelligent AI assistant that transforms corporate data into actionable insights, fostering efficiency and innovation with unwavering trust and data privacy.'
                    ],
                    'fr' => [
                        'title' => "Feuille de route en un coup d'œil",
                        'description' => "Pour donner aux organisations axées sur la connaissance les moyens d'agir en leur fournissant un assistant d'IA sécurisé et intelligent qui transforme les données d'entreprise en informations exploitables, favorisant ainsi l'efficacité et l'innovation avec une confiance inébranlable et la confidentialité des données."
                    ],
                    'it' => [
                        'title' => 'Roadmap in sintesi',
                        'description' => 'Per potenziare le organizzazioni basate sulla conoscenza fornendo un assistente AI sicuro e intelligente che trasforma i dati aziendali in informazioni fruibili, promuovendo efficienza e innovazione con fiducia incrollabile e riservatezza dei dati.'
                    ],
                    'de' => [
                        'title' => ' Wallee: Ihr intelligenter Assistent für maximale Effizienz.',
                        'description' => 'Wir widmen uns der Entwicklung des führenden KI-gestützten Knowledge Assistant, der  die Interaktion von Fachkräften mit Informationen revolutioniert. Unsere Vision: nahtlose,  intelligente Interaktionen, die Wallee zu Ihrem proaktiven Partner machen.  Stellen Sie sich vor: sofortiger Zugriff auf präzise Informationen, verkürzte Recherchezeiten und  mehr Fokus auf strategische Aspekte.  Wir haben Wallee, unseren KI-gestützten Knowledge Assistant, in enger Zusammenarbeit mit  Schlüsselpartnern entwickelt, um ihn präzise auf die Anwendungsfälle im Rechts- und  Medizinbereich zuzuschneiden. Das bedeutet, unsere Lösung ist darauf ausgelegt, Ihren  juristischen und medizinischen Alltag unglaublich nützlich zu gestalten, Arbeitsabläufe zu  optimieren und die Zeit, die Sie mit Fällen verbringen, effizienter zu nutzen. Stellen Sie sich vor,  Sie greifen sofort auf präzise Informationen zu, verkürzen Recherchezeiten und können sich  stärker auf die strategischen Aspekte Ihrer Arbeit konzentrieren.'
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
                        'description' => 'Our current product is ready for you to use and includes chat functionality, table-based analysis, and advanced security with strict compliance controls.'
                    ],
                    'fr' => [
                        'title' => 'MVP - Prêt MAINTENANT',
                        'description' => "Notre produit actuel est prêt à l'emploi et comprend une fonctionnalité de chat, une analyse basée sur des tableaux et une sécurité avancée avec des contrôles de conformité stricts."
                    ],
                    'it' => [
                        'title' => 'MVP - Pronto ORA',
                        'description' => "Il nostro prodotto attuale è pronto per l'uso
                        e include funzionalità di chat, analisi basate su tabelle
                        e sicurezza avanzata con rigorosi
                        controlli di conformità."
                    ],
                    'de' => [
                        'title' => ' Ihr smarter Chatbot für dynamische Wissensarbeit',
                        'description' => ''
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
                        'description' => 'We will introduce shared workspaces for real-time collaboration, comprehensive reporting, and a smart template library to streamline your workflows.'
                    ],
                    'fr' => [
                        'title' => 'V1',
                        'description' => 'Nous présenterons des espaces de travail partagés pour une collaboration en temps réel, des rapports complets et une bibliothèque de modèles intelligents pour optimiser vos flux de travail.'
                    ],
                    'it' => [
                        'title' => 'V1',
                        'description' => 'Presenteremo spazi di lavoro condivisi per la collaborazione in tempo reale, report completi e una libreria di modelli intelligenti per semplificare i flussi di lavoro.'
                    ],
                    'de' => [
                        'title' => 'Flexible Kontextverwaltung',
                        'description' => 'Mit Wallee heben Sie Ihre Dokumentenarbeit auf ein neues Niveau. Unser innovativer  Chatbot ermöglicht es Ihnen, Kontexte dynamisch und perfekt auf Ihre individuellen  Anforderungen zugeschnitten zu definieren.'
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
                        'description' => 'Future versions will focus on even greater analytical depth and the ability for customers to create and manage their own custom templates.'
                    ],
                    'fr' => [
                        'title' => 'Améliorations futures',
                        'description' => 'Les prochaines versions se concentreront sur une analyse encore plus approfondie et permettront aux clients de créer et de gérer leurs propres modèles personnalisés.'
                    ],
                    'it' => [
                        'title' => 'Miglioramenti futuri',
                        'description' => 'Le versioni future si concentreranno su una maggiore
                        profondità analitica e sulla possibilità per i clienti
                        di creare e gestire i propri modelli
                        personalizzati.'
                    ],
                    'de' => [
                        'title' => ' Tabellarische Dokumentenanalyse',
                        'description' => 'Nutzen Sie diesen Kontext, um eine tabellarische Übersicht zu generieren, die es Ihnen erlaubt,  mehrere Dokumente gleichzeitig zu analysieren und zu vergleichen. So gewinnen Sie schnell  präzise Einblicke, ohne zwischen Dateien wechseln zu müssen.'
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
                        'description' => '',
                    ],
                    'fr' => [
                        'title' => "Fonctionnalités futures\u{00A0}: intégration de base ",
                        'description' => '',
                    ],
                    'it' => [
                        'title' => 'Funzionalità future: integrazione di base',
                        'description' => '',
                    ],
                    'de' => [
                        'title' => ' Zukünftige Funktionen',
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
                        'description' => 'Intégration transparente avec le système de gestion de documents (DMS) du client.',
                    ],
                    'it' => [
                        'title' => 'Integrazione DMS',
                        'description' => 'Integrazione perfetta con il sistema di gestione dei documenti (DMS) del cliente.',
                    ],
                    'de' => [
                        'title' => 'DMS-Integration',
                        'description' => 'Nahtlose Integration mit dem kundeneigenen Dokumentenmanagementsystem (DMS).',
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
                        'description' => 'Secure data access and indexing with your own infrastructure.',
                    ],
                    'fr' => [
                        'title' => 'Accès sécurisé aux données',
                        'description' => 'Accès sécurisé aux données et indexation avec votre propre infrastructure.',
                    ],
                    'it' => [
                        'title' => 'Accesso sicuro ai dati',
                        'description' => 'Accesso e indicizzazione sicuri dei dati con la tua infrastruttura.',
                    ],
                    'de' => [
                        'title' => 'Sicherer Datenzugriff',
                        'description' => 'Sicherer Datenzugriff und Indizierung mit Ihrer eigenen Infrastruktur.',
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
                        'description' => 'Single source of truth for enterprise documents using your own infrastructure.',
                    ],
                    'fr' => [
                        'title' => 'Source unique de vérité',
                        'description' => "Source unique de vérité pour les documents d'entreprise utilisant votre propre infrastructure.",
                    ],
                    'it' => [
                        'title' => 'Unica fonte di verità',
                        'description' => "Un'unica fonte di verità per i documenti aziendali utilizzando la tua infrastruttura.",
                    ],
                    'de' => [
                        'title' => 'Eine einzige Quelle der Wahrheit',
                        'description' => 'Eine einzige zuverlässige Quelle für Unternehmensdokumente unter Verwendung Ihrer eigenen Infrastruktur.',
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
                        'description' => 'Integration with your in-house Office solution for templating and document generation.',
                    ],
                    'fr' => [
                        'title' => 'Intégration de bureau',
                        'description' => 'Intégration avec votre solution Office interne pour la création de modèles et la génération de documents.',
                    ],
                    'it' => [
                        'title' => 'Integrazione in ufficio',
                        'description' => 'Integrazione con la soluzione Office interna per la creazione di modelli e la generazione di documenti.',
                    ],
                    'de' => [
                        'title' => 'Office-Integration',
                        'description' => 'Integration mit Ihrer internen Office-Lösung zur Vorlagenerstellung und Dokumentgenerierung.',
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
                        'title' => 'Notre solution, à votre façon',
                        'description' => "Nous pensons qu'un produit doit évoluer pour répondre à vos besoins, et non l'inverse. Nous nous engageons à créer une plateforme parfaitement adaptée à votre organisation.",
                    ],
                    'it' => [
                        'title' => 'La nostra soluzione, a modo tuo',
                        'description' => 'Crediamo che sia un prodotto a doversi evolvere per adattarsi alle tue esigenze, non il contrario. Ci impegniamo a creare una piattaforma che si adatti perfettamente alla tua organizzazione.',
                    ],
                    'de' => [
                        'title' => 'Unsere Lösung, Ihr Weg',
                        'description' => 'Wir sind davon überzeugt, dass sich ein Produkt Ihren Bedürfnissen anpassen sollte, nicht umgekehrt. Wir entwickeln eine Plattform, die perfekt zu Ihrem Unternehmen passt.',
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
                        'description' => 'We are here to understand your most complex workflows and learn how our platform can evolve to meet your specific needs.',
                    ],
                    'fr' => [
                        'title' => 'Parlez-nous de vos défis',
                        'description' => 'Nous sommes là pour comprendre vos flux de travail les plus complexes et apprendre comment notre plateforme peut évoluer pour répondre à vos besoins spécifiques.',
                    ],
                    'it' => [
                        'title' => 'Raccontaci le tue sfide',
                        'description' => 'Siamo qui per comprendere i tuoi flussi di lavoro più complessi e capire come la nostra piattaforma possa evolversi per soddisfare le tue esigenze specifiche.',
                    ],
                    'de' => [
                        'title' => 'Erzählen Sie uns von Ihren Herausforderungen',
                        'description' => 'Wir sind hier, um Ihre komplexesten Arbeitsabläufe zu verstehen und zu erfahren, wie sich unsere Plattform weiterentwickeln kann, um Ihre spezifischen Anforderungen zu erfüllen.',
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
                        'description' => "Nous travaillerons avec vous pour garantir que notre produit s'intègre parfaitement à votre écosystème actuel, transformant vos données d'entreprise en informations exploitables pour tous.",
                    ],
                    'it' => [
                        'title' => 'Aiutaci a perfezionare la nostra soluzione',
                        'description' => 'Collaboreremo con voi per garantire che il nostro prodotto si integri perfettamente nel vostro ecosistema attuale, trasformando i dati aziendali in informazioni fruibili per tutti.',
                    ],
                    'de' => [
                        'title' => 'Helfen Sie uns, unsere Lösung zu verfeinern',
                        'description' => 'Wir arbeiten mit Ihnen zusammen, um sicherzustellen, dass sich unser Produkt nahtlos in Ihr aktuelles Ökosystem integriert und Ihre Unternehmensdaten in umsetzbare Erkenntnisse für alle umwandelt.',
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
                            'translatable_id' => $cms->id,
                            'language' => $lang,
                            'field' => $field,
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
