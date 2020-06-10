<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Pedro',
            'email' => 'pedro@gmail.com',
            'password' => Hash::make('secrect1')
        ]);

        DB::table('users')->insert([
            'name' => 'Javier',
            'email' => 'javier@gmail.com',
            'password' => Hash::make('secrect1')
        ]);

        DB::table('users')->insert([
            'name' => 'Emilio',
            'email' => 'emilio@gmail.com',
            'password' => Hash::make('secrect1')
        ]);
    }
}
