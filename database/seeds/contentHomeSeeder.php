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
                'page_id' => '1',
                'title' => 'title'
            ],
        ]);
        DB::table('co_home__our-servises')->insert([
            [
                'page_id' => '1',
                'title' => 'title',
                'link' => 'link'
            ],
        ]);
        DB::table('co_home__autowish-about')->insert([
            [
                'page_id' => '1',
                'title' => 'title',
                'paragraph1' => 'paragraph1',
                'paragraph2' => 'paragraph2',
            ],
        ]);
        DB::table('co_home__autowish-benefits')->insert([
            [
                'page_id' => '1',
                'bold' => 'bold',
                'text' => 'text'
            ],
        ]);
        DB::table('co_home__autowish-servises-title')->insert([
            [
                'page_id' => '1',
                'title' => 'title'
            ],
        ]);
        DB::table('co_home__autowish-servises')->insert([
            [
                'page_id' => '1',
                'title' => 'title',
                'link' => 'link'
            ],
        ]);
        DB::table('co_home__smart-search')->insert([
            [
                'page_id' => '1',
                'title' => 'title',
                'examples' => 'examples'
            ],
        ]);
        DB::table('co_home__soc-media')->insert([
            [
                'page_id' => '1',
                'title' => 'title'
            ],
        ]);
    }
}
