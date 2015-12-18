<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User as User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('users')->delete();
        $faker = Faker::create();
        foreach(range(1, 10) as $index)
        {
            User::create([
                'name' => $faker->userName,
                'password' => 'secret',
                'email' => $faker->email
            ]);
        }

    }
}
