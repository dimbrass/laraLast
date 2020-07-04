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
            [
            'name' => 'admin',
            'email' => 'admin@admin.admin',
            'password' => bcrypt('admin'),         
            ],
            [
            'name' => 'contmanager',
            'email' => 'contmanager@contmanager.contmanager',
            'password' => bcrypt('contmanager'),
            ],
            [
            'name' => 'dimbrass',
            'email' => 'dimbrass@mail.ru',
            'password' => bcrypt('dimbrass'),
            ]
    ]);
    }
}
