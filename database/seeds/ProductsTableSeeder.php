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

        $faker = Faker\Factory::create();
        for ($i=0; $i < 20; $i++) { 
            # code...
            Product::create([
                'title' => $faker->sentence(4),
                'slug' => $faker->slug,
                'subtitle' => $faker->sentence(5),
                'description' => $faker->text,
                'price' => $faker->numberBetween(15000, 90000),
                'image' => 'https://placehold.it/700x400'
            ])->categories()->attach([
                rand(1, 4),
                rand(1, 4) 
            ]);
        }
    }
}
