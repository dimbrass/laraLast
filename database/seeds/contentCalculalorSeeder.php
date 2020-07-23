<?php

use Illuminate\Database\Seeder;

class contentCalculalorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('co_calculator__useful-info-top')->insert([
            [
            'title' => 'title',
            ],
        ]);
        DB::table('co_calculator__useful-info-item')->insert([
            [
            'title' => 'title',
            'paragraph' => 'paragraph',
            ],
        ]);
    }
}
