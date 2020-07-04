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
        DB::table('content__home_topslider')->insert([
            [
            'title' => 'content__home_topslider title'
            ],
        ]);
        DB::table('content__home_insurance')->insert([
            [
            'link' => 'content__home_topslider link'
            ],
        ]);
        DB::table('content__home_our-servises-title')->insert([
            [
            'title' => 'content__home_our-servises-title title'
            ],
        ]);
        DB::table('content__home_our-servises')->insert([
            [
            'title' => 'content__home_our-servises title',
            'link' => 'content__home_our-servises link'
            ],
        ]);
        DB::table('content__home_autowish-about')->insert([
            [
            'title' => 'content__home_autowish-about title',
            'paragraph1' => 'content__home_autowish-about paragraph1',
            'paragraph2' => 'content__home_autowish-about paragraph2',
            ],
        ]);
        DB::table('content__home_autowish-benefits')->insert([
            [
            'bold' => 'content__home_autowish-benefits bold',
            'text' => 'content__home_autowish-benefits text'
            ],
        ]);
        DB::table('content__home_autowish-servises-title')->insert([
            [
            'title' => 'content__home_autowish-servises-title title'
            ],
        ]);
        DB::table('content__home_autowish-servises')->insert([
            [
            'title' => 'content__home_autowish-servises title',
            'link' => 'content__home_autowish-servises link'
            ],
        ]);
        DB::table('content__home_smart-search')->insert([
            [
            'title' => 'content__home_smart-searchtitle',
            'examples' => 'content__home_smart-search examples'
            ],
        ]);
        DB::table('content__home_soc-media')->insert([
            [
            'title' => 'content__home_soc-media title'
            ],
        ]);
    }
}
