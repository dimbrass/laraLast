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
        DB::table('co_home__topslider')->insert([
            [
            'title' => 'co_home__topslider title'
            ],
        ]);
        DB::table('co_home__insurance')->insert([
            [
            'link' => 'co_home__topslider link'
            ],
        ]);
        DB::table('co_home__our-servises-title')->insert([
            [
            'title' => 'co_home__our-servises-title title'
            ],
        ]);
        DB::table('co_home__our-servises')->insert([
            [
            'title' => 'co_home__our-servises title',
            'link' => 'co_home__our-servises link'
            ],
        ]);
        DB::table('co_home__autowish-about')->insert([
            [
            'title' => 'co_home__autowish-about title',
            'paragraph1' => 'co_home__autowish-about paragraph1',
            'paragraph2' => 'co_home__autowish-about paragraph2',
            ],
        ]);
        DB::table('co_home__autowish-benefits')->insert([
            [
            'bold' => 'co_home__autowish-benefits bold',
            'text' => 'co_home__autowish-benefits text'
            ],
        ]);
        DB::table('co_home__autowish-servises-title')->insert([
            [
            'title' => 'co_home__autowish-servises-title title'
            ],
        ]);
        DB::table('co_home__autowish-servises')->insert([
            [
            'title' => 'co_home__autowish-servises title',
            'link' => 'co_home__autowish-servises link'
            ],
        ]);
        DB::table('co_home__smart-search')->insert([
            [
            'title' => 'co_home__smart-searchtitle',
            'examples' => 'co_home__smart-search examples'
            ],
        ]);
        DB::table('co_home__soc-media')->insert([
            [
            'title' => 'co_home__soc-media title'
            ],
        ]);
    }
}
