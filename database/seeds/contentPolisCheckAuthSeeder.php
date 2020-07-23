<?php

use Illuminate\Database\Seeder;

class contentPolisCheckAuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('co_polis-check-auth__top')->insert([
            [
            'title' => 'title',
            'paragraph' => 'paragraph',
            ],
        ]);
        DB::table('co_polis-check-auth__item')->insert([
            [
            'title' => 'title',
            'link' => 'link',
            'paragraph1' => 'paragraph1',
            'paragraph2' => 'paragraph2',
            'paragraph3' => 'paragraph3',
            'paragraph4' => 'paragraph4',
            'paragraph5' => 'paragraph5',
            'paragraph6' => 'paragraph6',
            'list1_title' => 'list1_title',
            'list1' => 'list1',
            'list2_title' => 'list2_title',
            'list2' => 'list2',
            'table' => 'table',
            ],
        ]);
    }
}
