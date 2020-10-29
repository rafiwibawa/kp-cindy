<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'rafiwibawaaruan',
            'name' => 'rafi',
            'email' => 'rafinew1997@gmail.com',
            'no_hp' => '081266745365',
            'password' => Hash::make('1234qwer'),
        ]);
    }
}
