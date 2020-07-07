<?php

use Illuminate\Database\Seeder;

class contentBlocks_TopsliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('co_blocks__topslider')->insert([
            [
            'title' => 'title'
            ],
        ]);
    }
}
