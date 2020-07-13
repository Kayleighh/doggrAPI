<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Dog;

class DogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dog::truncate();

        for($i = 0; $i < 50; $i++){
            Dog::create([
                'name' => Str::random(10),
                'breed' => Str::random(10),
                'age' => rand(0,9),
                'height' => rand(0,9),
                'fur' => Str::random(5),
                'date' => Carbon::now()->format('y-m-d'),
                'description' =>Str::random(25),
                'vaccinated' => rand(0, 1),
                'cats' => rand(0, 1),
                'dogs' => rand(0, 1),
                'neutered' =>rand(0, 1),
                'commands'=>rand(0, 1),
                'image' => "beepbeep.jpg"
            ]);
        }
    }
}
