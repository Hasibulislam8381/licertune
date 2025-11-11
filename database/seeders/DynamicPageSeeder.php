<?php

namespace Database\Seeders;

use App\Models\DynamicPage;
use App\Models\DynamicPageTranslation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DynamicPageSeeder extends Seeder
{
    public function run(): void
    {
        // Base page (main/default English)
        $page = DynamicPage::create([
            'page_title'   => 'Privacy And Policy',
            'page_slug'    => Str::slug('Privacy And Policy'),
            'page_content' => 'This Privacy Policy explains how our company collects, uses, and protects your personal information when you use our website or services.',
        ]);

        // Translations for multiple languages
        $translations = [
            'en' => [
                'page_title' => 'Privacy And Policy',
                'page_content' => "
<h3>1. Introduction</h3>
<p>We value your privacy and are committed to protecting your personal data. This policy outlines how we collect, use, and safeguard your information.</p>

<h3>2. Information We Collect</h3>
<p>We may collect personal information such as your name, email address, phone number, and any other details you provide when using our services.</p>

<h3>3. How We Use Your Data</h3>
<p>Your data is used to improve our services, respond to inquiries, process transactions, and send updates or promotional materials when permitted.</p>

<h3>4. Cookies</h3>
<p>We use cookies to enhance user experience, track usage patterns, and personalize content. You can choose to disable cookies in your browser settings.</p>

<h3>5. Data Protection</h3>
<p>We implement industry-standard security measures to prevent unauthorized access, alteration, or disclosure of your personal data.</p>

<h3>6. Contact Us</h3>
<p>If you have questions regarding this Privacy Policy, please contact us via our support page or email.</p>
                ",
            ],

            'fr' => [
                'page_title' => 'Politique de Confidentialité',
                'page_content' => "
<h3>1. Introduction</h3>
<p>Nous accordons une grande importance à votre vie privée et nous nous engageons à protéger vos données personnelles. Cette politique décrit comment nous collectons, utilisons et protégeons vos informations.</p>

<h3>2. Informations Collectées</h3>
<p>Nous pouvons collecter des informations telles que votre nom, votre adresse e-mail, votre numéro de téléphone et d'autres données que vous fournissez lors de l'utilisation de nos services.</p>

<h3>3. Utilisation des Données</h3>
<p>Vos données sont utilisées pour améliorer nos services, répondre à vos demandes, traiter les paiements et vous envoyer des informations pertinentes ou promotionnelles.</p>

<h3>4. Cookies</h3>
<p>Nous utilisons des cookies pour améliorer votre expérience utilisateur, analyser le trafic et personnaliser le contenu. Vous pouvez désactiver les cookies dans les paramètres de votre navigateur.</p>

<h3>5. Protection des Données</h3>
<p>Nous mettons en œuvre des mesures de sécurité conformes aux normes du secteur afin d'éviter tout accès non autorisé ou toute fuite de vos informations personnelles.</p>

<h3>6. Contact</h3>
<p>Pour toute question concernant cette politique de confidentialité, veuillez nous contacter via notre page de support.</p>
                ",
            ],

            'it' => [
                'page_title' => 'Informativa sulla Privacy',
                'page_content' => "
<h3>1. Introduzione</h3>
<p>Rispettiamo la tua privacy e ci impegniamo a proteggere i tuoi dati personali. Questa informativa descrive come raccogliamo, utilizziamo e proteggiamo le informazioni degli utenti.</p>

<h3>2. Dati Raccolti</h3>
<p>Raccogliamo dati come nome, indirizzo e-mail, numero di telefono e altre informazioni fornite durante l’utilizzo dei nostri servizi.</p>

<h3>3. Utilizzo dei Dati</h3>
<p>I tuoi dati vengono utilizzati per migliorare i nostri servizi, rispondere alle richieste, elaborare transazioni e inviare comunicazioni informative o promozionali.</p>

<h3>4. Cookie</h3>
<p>Utilizziamo i cookie per migliorare l’esperienza dell’utente, monitorare l’utilizzo del sito e personalizzare i contenuti. Puoi disattivare i cookie dalle impostazioni del browser.</p>

<h3>5. Protezione dei Dati</h3>
<p>Applichiamo misure di sicurezza avanzate per prevenire accessi non autorizzati o perdite di dati personali.</p>

<h3>6. Contatti</h3>
<p>Per domande su questa informativa, contattaci tramite la nostra pagina di supporto.</p>
                ",
            ],

            'de' => [
                'page_title' => 'Datenschutzrichtlinie',
                'page_content' => "
<h3>1. Einleitung</h3>
<p>Wir respektieren Ihre Privatsphäre und verpflichten uns, Ihre persönlichen Daten zu schützen. Diese Richtlinie beschreibt, wie wir Informationen sammeln, verwenden und sichern.</p>

<h3>2. Gesammelte Informationen</h3>
<p>Wir können Daten wie Name, E-Mail-Adresse, Telefonnummer und andere von Ihnen bereitgestellte Informationen erfassen.</p>

<h3>3. Verwendung der Daten</h3>
<p>Ihre Daten werden verwendet, um unsere Dienstleistungen zu verbessern, Anfragen zu beantworten, Transaktionen zu verarbeiten und relevante Mitteilungen zu senden.</p>

<h3>4. Cookies</h3>
<p>Wir verwenden Cookies, um die Benutzererfahrung zu verbessern, die Nutzung zu analysieren und Inhalte zu personalisieren. Sie können Cookies in den Browsereinstellungen deaktivieren.</p>

<h3>5. Datensicherheit</h3>
<p>Wir setzen moderne Sicherheitsmaßnahmen ein, um unbefugten Zugriff oder Datenverlust zu verhindern.</p>

<h3>6. Kontakt</h3>
<p>Wenn Sie Fragen zu dieser Datenschutzrichtlinie haben, kontaktieren Sie uns bitte über unsere Support-Seite.</p>
                ",
            ],
        ];

        foreach ($translations as $locale => $data) {
            DynamicPageTranslation::create([
                'dynamic_page_id' => $page->id,
                'locale'          => $locale,
                'page_title'      => $data['page_title'],
                'page_content'    => $data['page_content'],
            ]);
        }
    }
}
