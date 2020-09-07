<?php

use Illuminate\Database\Seeder;

// Use Footballer model class
use App\Footballer;

class FootballersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Footballers database data
        $footballers_array = [
          [
            "name" => "Alessandro",
            "lastname" => "Del Piero",
            "nationality" => "Italian",
            "position" => "forward",
            "age" => 46,
            "description" => "If ever there lived a more complete footballer than Alessandro Del Piero, I have yet to come across him. Both a role model on and off the pitch, Il Pinturicchio—as he has come to be known—is indeed a living legend of the game."
          ],
          [
            "name" => "Zinedine Yazid",
            "lastname" => "Zidane",
            "nationality" => "French",
            "position" => "attacking midfielder",
            "age" => 48,
            "description" => "Zinedine Zidane is one of the most famous French football players of all time, widely regarded as a master of the fundamentals and techniques of the game. He is known for his excellent control and dribbling skills, his magic ball touch, his focused vision and great leadership traits. During his active soccer years, no player would surpass the way he controlled and received the ball."
          ]
        ];

        foreach ($footballers_array as $footballer) {
          $new_footballer = new Footballer();

          // First way
          // $new_footballer->name = $footballer["name"];
          // $new_footballer->lastname = $footballer["lastname"];
          // $new_footballer->nationality = $footballer["nationality"];
          // $new_footballer->position = $footballer["position"];
          // $new_footballer->age = $footballer["age"];
          // $new_footballer->description = $footballer["description"];

          // Second way
          $new_footballer->fill($footballer);

          // Save data
          $new_footballer->save();
        }
    }
}
