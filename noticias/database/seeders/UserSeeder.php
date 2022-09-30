<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,5) as $value) {

            DB::table('events')->insert([

                'titulo' => $faker->sentence($nbWords = 6, $variableNbWords = false),
                'descricao' =>  $faker->sentence($nbWords = 250, $variableNbWords = false),
                'imagem' => $faker->unique()->randomDigit . ".png",
                'autor' => $faker->name,
    
            ]);

        }

    }
}
