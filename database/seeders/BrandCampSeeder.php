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
                'image' => 'uploads/brandcamp/17617362431736524409.jpg',
                'translations' => [
                    'en' => [
                        'title' => 'Your Knowledge Secured. Your Interactions, Revolutionized.',
                        'subtitle' => 'Empowering Organizations',
                        'description' => 'Sursenda GmbH pioneers intelligent assistance — empowering organizations with a secure, private, and high-performance AI knowledge assistant.',
                    ],
                    'fr' => [
                        'title' => 'Votre savoir sécurisé. Vos interactions, révolutionnées.',
                        'subtitle' => 'Autonomiser les organisations',
                        'description' => 'Sursenda GmbH est à la pointe de l’assistance intelligente — offrant aux organisations un assistant de connaissance IA sécurisé, privé et performant.',
                    ],
                    'it' => [
                        'title' => 'La tua conoscenza protetta. Le tue interazioni, rivoluzionate.',
                        'subtitle' => 'Potenziare le organizzazioni',
                        'description' => 'Sursenda GmbH guida l’assistenza intelligente — potenziando le organizzazioni con un assistente di conoscenza AI sicuro, privato e ad alte prestazioni.',
                    ],
                    'de' => [
                        'title' => 'Ihr Wissen gesichert. Ihre Interaktionen, revolutioniert.',
                        'subtitle' => 'Organisationen befähigen',
                        'description' => 'Sursenda GmbH setzt Maßstäbe in intelligenter Unterstützung — und befähigt Organisationen mit einem sicheren, privaten und leistungsstarken KI-Wissensassistenten.',
                    ],
                ],
            ],
            [
                'page_name' => 'Contact Us',
                'slug' => 'contact-us',
                'image' => 'uploads/brandcamp/17617362431736524409.jpg',
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
                'image' => 'uploads/brandcamp/17617362431736524409.jpg',
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
                'image' => 'uploads/brandcamp/17617362431736524409.jpg',
                'translations' => [
                    'en' => ['title' => 'Pricing'],
                    'fr' => ['title' => 'Tarification'],
                    'it' => ['title' => 'Prezzi'],
                    'de' => ['title' => 'Preise'],
                ],
            ],
            [
                'page_name' => 'Our Product',
                'slug' => 'our-product',
                'image' => 'uploads/brandcamp/17617362431736524409.jpg',
                'translations' => [
                    'en' => ['title' => 'Our Product'],
                    'fr' => ['title' => 'Notre produit'],
                    'it' => ['title' => 'Il nostro prodotto'],
                    'de' => ['title' => 'Unser Produkt'],
                ],
            ],
            // আরও pages চাইলে এখানে add করতে পারো
            // [
            //     'page_name' => 'contact',
            //     'slug' => 'contact',
            //     'image' => null,
            //     'translations' => [ ... ]
            // ],
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
