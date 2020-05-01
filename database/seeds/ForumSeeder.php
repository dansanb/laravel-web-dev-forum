<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;


class ForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        DB::table('forums')->insert([
            'name' => 'PHP',
            'description' => 'Does it start with an $? Talk about it here!', 
            'created_at' => Carbon::now(),
        ]);

        DB::table('forums')->insert([
            'name' => 'JavaScript',
            'description' => "Because it's more than just jQuery.",
            'created_at' => Carbon::now(),
        ]);

        DB::table('forums')->insert([
            'name' => 'HTML/CSS',
            'description' => 'What customers and clients really care for.',
            'created_at' => Carbon::now(),
        ]);
         
        DB::table('forums')->insert([
            'name' => 'Databases',
            'description' => 'Union or Join only spoken here.',
            'created_at' => Carbon::now(),
        ]);

        DB::table('forums')->insert([
            'name' => 'Servers',
            'description' => 'We are all root!',
            'created_at' => Carbon::now(),
        ]);
    }
}
