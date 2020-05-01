<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class ReplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

         // create 5000 replies to random topics for testing
         for ($i=0; $i < 5000; $i++) {           
            DB::table('replies')->insert([
                'topic_id' => $faker->numberBetween(1,500),
                'author_id' => $faker->numberBetween(1,50),
                'body' => $faker->paragraphs($nb = $faker->numberBetween(1,5), $asText = true),
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
