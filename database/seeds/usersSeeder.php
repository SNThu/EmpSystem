<?php

use Illuminate\Database\Seeder;
use App\User;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Aye Aye',
            'email' => 'ayeaye@gmail.com',
            'password' => Hash::make ('password'),
            'remember_token' => str_random(10),
        ]);
    }
}
