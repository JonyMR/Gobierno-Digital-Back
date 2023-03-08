<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;

class SeederTablaUsuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::truncate();
        $faker = \Faker\Factory::create();

        for($i=0; $i<15; $i++){
            Usuario::create([
                'id' => $i+1,
                'name' => $faker->firstNameMale,
                'email' => $faker->email,
                'email_verified_at'=> $faker->date($format = 'Y-m-d', $max = 'now'),
                'password'=> $faker->word,
                'remember_token'=> $faker->randomElement($array = array ('0','1')),
                'created_at'=> $faker->date($format = 'Y-m-d', $max = 'now'),
                'updated_at'=> $faker->date($format = 'Y-m-d', $max = 'now')
            ]);
        }
    }
}  
