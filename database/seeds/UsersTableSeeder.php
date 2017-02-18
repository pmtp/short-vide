<?php

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
        //Ederson Moraes - Goalkeeper Lover
        $user = new \App\User();
        $user->name = 'Ederson Moraes';
        $user->email = 'ederson@gmail.com';
        $user->username = 'edersonmoraes1';
        $user->avatar_url = 'https://unsplash.it/200/200?random';
        $user->password = bcrypt('secret');
        $user->save();

        //Pierre Aubameyang - Forward
        $user2 = new \App\User();
        $user2->name = 'Pierre Aubameyang';
        $user2->email = 'p17@gmail.com';
        $user2->username = 'pierr17bvb';
        $user2->avatar_url = 'https://unsplash.it/200/200?random';
        $user2->password = bcrypt('secret');
        $user2->save();

    }
}
