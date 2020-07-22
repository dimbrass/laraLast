<?php

use Illuminate\Database\Seeder;

class contentUserAgreementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('co_user-agreement__page-title')->insert([
            [
            'title' => 'title',
            'date' => 'date',
            ],
        ]);
        DB::table('co_user-agreement__text-block')->insert([
            [
            'title' => 'title',
            'text1' => 'text1',
            'text2' => 'text2',
            'text3' => 'text3',
            'list1' => 'list1',
            'list2' => 'list2',
            ],
        ]);
    }
}
