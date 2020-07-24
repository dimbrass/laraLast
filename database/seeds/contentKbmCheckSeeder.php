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
            'bold_paragraph1' => 'bold_paragraph1',
            'bold_paragraph2' => 'bold_paragraph2'
            ],
        ]);
        DB::table('co_kbm-check__whattodo-title')->insert([
            [
            'title' => 'title'
            ],
        ]);
        DB::table('co_kbm-check__whattodo-item')->insert([
            [
            'title' => 'title1',
            'link' => 'link1'
            ],
        ]);
        DB::table('co_kbm-check__table')->insert([
            [
            'row_head1' => 'row_head1',
            'row_head2' => 'row_head2',
            'row_data' => 'row_data',
            ],
        ]);
    }
}
