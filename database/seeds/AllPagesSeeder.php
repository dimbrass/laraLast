<?php

use Illuminate\Database\Seeder;

class AllPagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('content__test__page__')->insert([
            [
            'name' => 'test',         
            'title' => 'T E S T',
            ],
        ]);
        DB::table('content__page__page__')->insert([
            [
            'name' => 'page',         
            'title' => 'P A G E',
            ],
        ]);
        DB::table('content__home__page__')->insert([
            [
            'name' => 'home',         
            'title' => 'Главная страница',
            ],
        ]);
        DB::table('content__osago__page__')->insert([
            [
            'name' => 'osago',
            'title' => 'Расчет ОСАГО',
            ],
        ]);
        DB::table('content__tech-inspection__page__')->insert([
            [
            'name' => 'tech-inspection',   
            'title' => 'Техосмотр', 
            ],
        ]);
        DB::table('content__tech-inspection-item__page__')->insert([
            [
            'name' => 'tech-inspection-item',         
            'title' => 'Страница одного пункта техосмотра',
            ],
        ]);
        DB::table('content__kbm-check__page__')->insert([
            [
            'name' => 'kbm-check',    
            'title' => 'КМБ проверить',
            ],
        ]);
        DB::table('content__kbm-restore__page__')->insert([
            [
            'name' => 'kbm-restore',         
            'title' => 'КМБ восстановить',
            ],
        ]);
        DB::table('content__mulct-check__page__')->insert([
            [
            'name' => 'mulct-check',    
            'title' => 'Проверка штрафов',
            ],
        ]);
        DB::table('content__policy-check__page__')->insert([
            [
            'name' => 'policy-check',       
            'title' => 'Проверка полиса',  
            ],
        ]);
        DB::table('content__user-agreement__page__')->insert([
            [
            'name' => 'user-agreement',    
            'title' => 'Пользовательское соглашение',
            ],
        ]);
        DB::table('content__site-map__page__')->insert([
            [
            'name' => 'site-map',
            'title' => 'Карта сайта',         
            ],
        ]);
        DB::table('content__our-offices__page__')->insert([
            [
            'name' => 'our-offices',
            'title' => 'Наши офисы',    
            ],
        ]);
    }
}
