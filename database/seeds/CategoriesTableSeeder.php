<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Sneakers',
            'slug' => 'sneakers-all'
        ]);
        Category::create([
            'name' => 'Streetwear',
            'slug' => 'streetwear-all'
        ]);
        Category::create([
            'name' => 'Bon plans',
            'slug' => 'bon-plans'
        ]);
        Category::create([
            'name' => 'Actualités',
            'slug' => 'news'
        ]);
        Category::create([
            'name' => 'Prochaines sorties',
            'slug' => 'coming-soon'
        ]);
    }
}
