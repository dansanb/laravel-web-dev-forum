<?php

use Illuminate\Database\Seeder;

class ForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        
        DB::table('forums')->insert([
            'name' => 'PHP',
            'description' => 'Does it start with an $? Talk about it here!',            
        ]);

        DB::table('forums')->insert([
            'name' => 'JavaScript',
            'description' => "Because it's more than just jQuery.",
        ]);

        DB::table('forums')->insert([
            'name' => 'HTML/CSS',
            'description' => 'What customers and clients really care for.'
        ]);
         
        DB::table('forums')->insert([
            'name' => 'Databases',
            'description' => 'Union or Join only spoken here.',
        ]);

        DB::table('forums')->insert([
            'name' => 'Servers',
            'description' => 'We are all root!',
        ]);
    }
}
