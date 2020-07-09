<?php

use Illuminate\Database\Seeder;

class contentHomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('co_home__insurance')->insert([
            [
            'page_id' => '1',
            'link' => 'link'
            ],
        ]);
        DB::table('co_home__our-servises-title')->insert([
            [
            'title' => 'title'
            ],
        ]);
        DB::table('co_home__our-servises')->insert([
            [
            'title' => 'title',
            'link' => 'link'
            ],
        ]);
        DB::table('co_home__autowish-about')->insert([
            [
            'title' => 'title',
            'paragraph1' => 'paragraph1',
            'paragraph2' => 'paragraph2',
            ],
        ]);
        DB::table('co_home__autowish-benefits')->insert([
            [
            'bold' => 'bold',
            'text' => 'text'
            ],
        ]);
        DB::table('co_home__autowish-servises-title')->insert([
            [
            'title' => 'title'
            ],
        ]);
        DB::table('co_home__autowish-servises')->insert([
            [
            'title' => 'title',
            'link' => 'link'
            ],
        ]);
        DB::table('co_home__smart-search')->insert([
            [
            'title' => 'title',
            'examples' => 'examples'
            ],
        ]);
        DB::table('co_home__soc-media')->insert([
            [
            'title' => 'title'
            ],
        ]);
    }
}
