<?php

namespace Database\Seeders;
use App\Models\Article;
use Illuminate\Database\Seeder;
use Faker\Factory as faker ;
class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i <30 ; $i++) {
            //Product c'est notre model
            Article::create([
            'title' => $faker->sentence(4),
            'slug' => $faker->slug,
            'description' => $faker->sentence(7),
            'longdescription' => $faker->text,
            'image' => 'https://via.placeholder.com/200x250',
            // ])->categories()->attach([
            //     rand(1,4),
            //     rand(1,4)
            ]);

        }
    }
}
