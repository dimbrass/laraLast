<?php

use Illuminate\Database\Seeder;

class contentKbmRestoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('co_kbm-restore__how-to-restore')->insert([
            [
            'title' => 'co_kbm-restore__how-to-restore title',
            'top' => 'co_kbm-restore__how-to-restore top',
            'title-2' => 'co_kbm-restore__how-to-restore title-2',
            'item-1' => 'co_kbm-restore__how-to-restore item-1',
            'item-2' => 'co_kbm-restore__how-to-restore item-2',
            'item-3' => 'co_kbm-restore__how-to-restore item-3',
            'paragraph1' => 'co_kbm-restore__how-to-restore paragraph1',
            'paragraph2' => 'co_kbm-restore__how-to-restore paragraph2',
            'bold-paragraph' => 'co_kbm-restore__how-to-restore bold-paragraph'
            ],
        ]);
        DB::table('co_kbm-restore__restore-by-sb')->insert([
            [
            'title' => 'co_kbm-restore__restore-by-sb title'
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
