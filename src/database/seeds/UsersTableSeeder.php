<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      // truncate existing
      User::truncate();

      $faker = \Faker\Factory::create();

      $hashedPassword = Hash::make('password');

      // create admin user
      User::create([
         'name' => 'Admin',
         'email' => 'no@one.com',
         'password' => $hashedPassword
      ]);

      // create other users

      for ($i = 0; $i < 50; $i++) {
         User::create([
            'name' => $faker->firstNameFemale,
            'email' => $faker->email,
            'password' => $hashedPassword
         ]);
      }
   }
}
