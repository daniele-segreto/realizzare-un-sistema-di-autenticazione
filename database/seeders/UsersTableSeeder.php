<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */ public function run()
    {
        $faker = Faker::create();
        $usersPsw = array(
            "demodemo",
            "123456",
            "testtest"
        );

        foreach ($usersPsw as $userPsw) {

            User::create([
                'name' => $faker->firstName . ' ' . $faker->lastName,
                'email' => $content = $faker->email,
                'password' => $userPsw
            ]);
        }
    }
}
