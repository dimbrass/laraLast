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
            'title' => 'title',
            'top' => 'top',
            'title-2' => 'title-2',
            'item-1' => 'item-1',
            'item-2' => 'item-2',
            'item-3' => 'item-3',
            'paragraph1' => 'paragraph1',
            'paragraph2' => 'paragraph2',
            'bold-paragraph' => 'bold-paragraph'
            ],
        ]);
        DB::table('co_kbm-restore__restore-by-sb')->insert([
            [
            'title' => 'title'
            ],
        ]);
        DB::table('co_kbm-restore__restore-by-insurance')->insert([
            [
            'title' => 'title'
            ],
        ]);
        DB::table('co_kbm-restore__restore-by-broker')->insert([
            [
            'title' => 'title'
            ],
        ]);
        DB::table('co_kbm-restore__restore-by-rsa')->insert([
            [
            'title' => 'title'
            ],
        ]);
        DB::table('co_kbm-restore__restore-quick')->insert([
            [
            'title' => 'title'
            ],
        ]);
    }
}
