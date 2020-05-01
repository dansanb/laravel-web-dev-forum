<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        // create 500 topics for testing
        for ($i=0; $i < 500; $i++) {           
            DB::table('topics')->insert([
                'forum_id' => $faker->numberBetween(1,5),
                'author_id' => $faker->numberBetween(1,50),
                'title' => $faker->sentence($nbWords = $faker->numberBetween(3,8), $variableNbWords = true),
                'body' => $faker->paragraphs($nb = $faker->numberBetween(1,5), $asText = true),
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
