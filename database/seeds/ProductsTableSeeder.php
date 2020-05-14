<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'title' => 'SB Strange Love',
            'slug' => 'sb-strange-love',
            'brand' => 'Nike',
            'reference' => 'CT2552-800',
            'description' => 'En cette période de Saint-Valentin, Nike SB collaborent avec StrangeLove sur une paire aux couleurs de l’amour, imaginée par Sean Cliver et Todd Batrud : la Nike SB Dunk Low StrangeLove.',
            'price' => '600',
            'image' => 'https://cdn.shopify.com/s/files/1/2358/2817/products/Wethenew-Sneakers-France-Nike-SB-Dunk-Low-StrangeLove-1_800x.png?v=1580235307'
        ])->categories()->attach([1]);

        Product::create([
            'title' => 'Jordan 1 Mid Milan',
            'slug' => 'jordan-1-mid-milan',
            'brand' => 'Air Jordan',
            'reference' => 'CV3044-100',
            'description' => 'La Air Jordan 1 Mid Milan présente un coloris plutôt pastel, avec une empeigne en cuir texturé mélangeant du blanc cassé et du beige. On retrouve une outsole beige et l’inscription « MLN » sur le tag amovible.',
            'price' => '250',
            'image' => 'https://cdn.shopify.com/s/files/1/2358/2817/products/Wethenew-Sneakers-France-Air-Jordan-1-Mid-Milan_800x.png?v=1582564350'
        ])->categories()->attach([1]);

        Product::create([
            'title' => 'SB Dunk Hugh Oski Shark',
            'slug' => 'sb-dunk-high-oski-shark',
            'brand' => 'Nike',
            'reference' => 'CI2692-001',
            'description' => 'Le jeune skater suédois, Oskar Rozenberg, fait équipe avec Nike Skateboarding sur une nouvelle OSKi x Nike SB Dunk High "Shark Swoosh".',
            'price' => '180',
            'image' => 'https://stockx-360.imgix.net/Nike-SB-Dunk-High-Oski-Shark/Images/Nike-SB-Dunk-High-Oski-Shark/Lv2/img01.jpg'
        ])->categories()->attach([1]);

        Product::create([
            'title' => 'Jordan 5 Retro Off-White',
            'slug' => 'jordan-5-off-white',
            'brand' => 'Air Jordan',
            'reference' => 'CT8480-001',
            'description' => 'Place maintenant à un modèle qui vient célébrer le 30ème anniversaire du design de Tinker Hatfield : la Air Jordan 5 Retro Off-White Black.',
            'price' => '750',
            'image' => 'https://cdn.shopify.com/s/files/1/2358/2817/products/Wethenew-Sneakers-France-Air-Jordan-5-Retro-Off-White-Black-CT8480-001-1_800x.png?v=1582216646'
        ])->categories()->attach([1]);

        Product::create([
            'title' => 'Gel-Lyte III OG Trico 2020',
            'slug' => 'gel-lyte-3-trico-2020',
            'brand' => 'Asics',
            'reference' => '1193A185-000',
            'description' => 'La collaboration donne une nouvelle ampleur au programme 30th Anniversary. En effet, Shigeyuki Mitsui le père du modèle à la semelle fendue, s’est joint à la Shigeyuki Kunii, le directeur créatif du shop nippon.',
            'price' => '180',
            'image' => 'https://stockx-360.imgix.net/Asics-Gel-Lyte-III-mita-30th-Anniversary/Images/Asics-Gel-Lyte-III-mita-30th-Anniversary/Lv2/img01.jpg'
        ])->categories()->attach([1]);

        Product::create([
            'title' => 'SB Bruins x The Poets',
            'slug' => 'sb-bruins-the-poets',
            'brand' => 'Nike',
            'reference' => 'CU3211-001',
            'description' => 'Nike SB a fait appel à la marque new-yorkaise de Gino Iannucci pour nous proposer une Poets x Nike SB Bruin.',
            'price' => '100',
            'image' => 'https://stockx-360.imgix.net/Nike-SB-Bruin-React-The-Poets/Images/Nike-SB-Bruin-React-The-Poets/Lv2/img01.jpg'
        ])->categories()->attach([1]);

        Product::create([
            'title' => 'Blazer Mid Slam Jam Class 1977 Black',
            'slug' => 'blazer-mid-slam-jam-black',
            'brand' => 'Nike',
            'reference' => 'CD8233-001',
            'description' => 'Après l’énorme succès de la première collaboration, le shop milanais Slam Jam s’associe de nouveau avec Nike. Comme pour la première édition, c’est une Blazer Mid qui est retravaillée.',
            'price' => '350',
            'image' => 'https://cdn.shopify.com/s/files/1/2358/2817/products/Wethenew-Sneakers-France-Nike-blaze-mid-slam-jam-black-1_800x.png?v=1574763895'
        ])->categories()->attach([1]);

    }
}