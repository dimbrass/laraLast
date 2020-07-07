<?php

use Illuminate\Database\Seeder;

class contentKbmCheckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('co_kbm-check__kbm-bonus-malus')->insert([
            [
            'title' => 'title',
            'top' => 'top',
            'paragraph1' => 'paragraph1',
            'paragraph2' => 'paragraph2',
            'paragraph3' => 'paragraph3',
            'bold-paragraph1' => 'bold-paragraph',
            'bold-paragraph2' => 'bold-paragraph'
            ],
        ]);
        DB::table('co_kbm-check__whattodo-title')->insert([
            [
            'title' => 'title'
            ],
        ]);
        DB::table('co_kbm-check__whattodo-item-1')->insert([
            [
            'title' => 'title1',
            'link' => 'link1'
            ],
        ]);
        DB::table('co_kbm-check__whattodo-item-2')->insert([
            [
            'title' => 'title2',
            'link' => 'link2'
            ],
        ]);
        DB::table('co_kbm-check__whattodo-item-3')->insert([
            [
            'title' => 'title3',
            'link' => 'link3'
            ],
        ]);
    }
}
