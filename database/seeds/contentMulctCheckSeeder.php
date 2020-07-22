<?php

use Illuminate\Database\Seeder;

class contentMulctCheckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('co_mulct-check__mulct-gbdd')->insert([
            [
            'text' => 'text',
            ],
        ]);
        DB::table('co_mulct-check__deny-mulct')->insert([
            [
            'text' => 'text',
            'link_title' => 'link_title',
            'link' => 'link',
            'warning' => 'warning',
            ],
        ]);
        DB::table('co_mulct-check__paid-mulct')->insert([
            [
            'title' => 'title',
            'text' => 'text',
            ],
        ]);
        DB::table('co_mulct-check__useful')->insert([
            [
            'title' => 'title',
            ],
        ]);
        DB::table('co_mulct-check__check-by-license')->insert([
            [
            'title' => 'title',
            'paragraph1' => 'paragraph1',
            'paragraph2' => 'paragraph2',
            ],
        ]);
        DB::table('co_mulct-check__mulct-item')->insert([
            [
            'title' => 'title',
            'text' => 'text',
            'link_title' => 'link_title',
            'link' => 'link',
            ],
        ]);
        DB::table('co_mulct-check__mulcts-to-pay')->insert([
            [
            'text' => 'text',
            'bold' => 'bold'
            ],
        ]);
    }
}
