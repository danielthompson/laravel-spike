<?php

use App\Trainer;
use Illuminate\Database\Seeder;

class TrainersTableSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      Trainer::truncate();

      $faker = \Faker\Factory::create();

      // create articles in the db
      for ($i = 0; $i < 50; $i++) {
         Trainer::create([
            'firstName' => $faker->firstNameFemale,
            'lastName' => $faker->lastName
         ]);
      }
   }
}
