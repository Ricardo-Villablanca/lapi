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
            'name' => 'Ricardo',
            'email' => 'ricardo.villablanca.utn@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
