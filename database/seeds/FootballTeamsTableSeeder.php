<?php

use Illuminate\Database\Seeder;

// Use Faker class
use Faker\Generator as Faker;

// Use FootballTeam model class
use App\Footballteam;

class FootballteamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
          $new_footballteam = new FootballTeam();

          //Name faker
          $new_footballteam->name = $faker->firstName();

          //Nationality faker
          $new_footballteam->nationality = $faker->country;

          //Colors faker
          $new_footballteam->colors = $faker->safeColorName;

          //Foundation faker
          $new_footballteam->foundation = $faker->year("2020");

          //Trophies faker
          $new_footballteam->trophies = $faker->paragraph();

          //Save data
          $new_footballteam->save();
        }
    }
}
