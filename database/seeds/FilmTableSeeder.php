<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use DB;
use Faker\Factory as Faker;

class FilmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\FilmModel');
        for ($i=0; $i < 4; $i++) {
	        DB::table('films')->truncate();
	        DB::table('films')->insert([
	            'title' => $faker->sentence,
	            'slug' => $faker->slug,
	            'description' => implode($faker->paragraph(5)),
	            'release_date' => $faker->dateTime($max = 'now'),
	            'ticket' => $faker->word,
	            'rating' => $faker->email,
	            'genre' => $faker->word,
	            'country' => $faker->country,
                    'photo' => $faker->file($sourceDir = '/images', $targetDir = '/images'),
                    'created_at' => $faker->dateTime($max = 'now'),
                    'updated_at' => $faker->dateTime($max = 'now'),
            ]);
        }
    }
}
