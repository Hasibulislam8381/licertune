<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BrandCamp;

class BrandCampSeeder extends Seeder
{
    public function run(): void
    {
        $pages = [
            [
                'page_name' => 'Home Page',
                'slug' => 'home-page',

                'image' => 'uploads/brandcamp/licer_home.jpg',
                'translations' => [
                    'en' => [
                        'title' => 'Your Knowledge Secured. Your Interactions, Revolutionized.',
                        'subtitle' => 'Empowering Organizations',
                        'description' => 'Sursenda GmbH pioneers intelligent assistance — empowering organizations with a secure, private, and high-performance AI knowledge assistant.',
                    ],
                    'fr' => [
                        'title' => 'Vos connaissances sécurisées. Vos interactions révolutionnées.',
                        'subtitle' => 'Autonomiser les organisations',
                        'description' => "Sursenda GmbH est le pionnier de l'assistance intelligente, offrant aux organisations un assistant de connaissances IA sécurisé, privé et hautes performances.",
                    ],
                    'it' => [
                        'title' => 'La tua conoscenza è al sicuro. Le tue interazioni sono rivoluzionate.',
                        'subtitle' => 'Potenziare le organizzazioni',
                        'description' => "Sursenda GmbH è pioniera nell'assistenza intelligente, offrendo alle organizzazioni un assistente IA sicuro, privato e ad alte prestazioni.",
                    ],
                    'de' => [
                        'title' => 'Ihr Wissen sicher.
                        Ihre Interaktionen revolutionär.',
                        'subtitle' => 'Organisationen befähigen',
                        'description' => 'Als Pionier für intelligente Assistenz  entwickeln wir den führenden, KI-gestützten  Wissensassistenten. Er wurde von Grund auf  für Unternehmen konzipiert, die höchste  Ansprüche an absolute Datensicherheit und  vertrauliche Wissensnutzung stellen.',
                    ],
                ],
            ],
            [
                'page_name' => 'Contact Us',
                'slug' => 'contact-us',
                'image' => 'uploads/brandcamp/contact_us_brad.jpg',
                'translations' => [
                    'en' => ['title' => 'Contact Us'],
                    'fr' => ['title' => 'Contactez-nous'],
                    'it' => ['title' => 'Contattaci'],
                    'de' => ['title' => 'Kontaktieren Sie uns'],
                ],
            ],
            [
                'page_name' => 'About Us',
                'slug' => 'about-us',
                'image' => 'uploads/brandcamp/about_us_brad.jpg',
                'translations' => [
                    'en' => ['title' => 'About Us'],
                    'fr' => ['title' => 'À propos de nous'],
                    'it' => ['title' => 'Chi siamo'],
                    'de' => ['title' => 'Über uns'],
                ],
            ],
            [
                'page_name' => 'Pricing',
                'slug' => 'pricing',
                'image' => 'uploads/brandcamp/pricing_brad.jpg',
                'translations' => [
                    'en' => ['title' => 'Pricing'],
                    'fr' => ['title' => 'Tarifs'],
                    'it' => ['title' => 'Prezzi'],
                    'de' => ['title' => 'Preise'],
                ],
            ],
            [
                'page_name' => 'Our Product',
                'slug' => 'our-product',
                'image' => 'uploads/brandcamp/our_product_brad.jpg',
                'translations' => [
                    'en' => ['title' => 'Our Product'],
                    'fr' => ['title' => 'Notre produit'],
                    'it' => ['title' => 'Il nostro prodotto'],
                    'de' => ['title' => 'Unsere Produkte'],
                ],
            ],

        ];

        foreach ($pages as $page) {
            $brand = BrandCamp::create([
                'page_name' => $page['page_name'],
                'slug' => $page['slug'],
                'status' => 'active',
                'image' => $page['image'],
            ]);

            foreach ($page['translations'] as $lang => $fields) {
                foreach ($fields as $field => $value) {
                    $brand->translations()->create([
                        'brand_camp_id' => $brand->id,
                        'language' => $lang,
                        'field' => $field,
                        'value' => $value,
                    ]);
                }
            }
        }
    }
}
