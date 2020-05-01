<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        // create 50 users for testing
        for ($i=0; $i < 50; $i++) {           
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
