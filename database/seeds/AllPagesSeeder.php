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
        DB::table('co_all-pages__home')->insert([
            [
            'name' => 'home',         
            'title' => 'Главная страница',
            ],
        ]);
        DB::table('co_all-pages__osago')->insert([
            [
            'name' => 'osago',
            'title' => 'Расчет ОСАГО',
            ],
        ]);
        DB::table('co_all-pages__kbm-check')->insert([
            [
            'name' => 'kbm-check',    
            'title' => 'Проверка КМБ',
            ],
        ]);
        DB::table('co_all-pages__kbm-restore')->insert([
            [
            'name' => 'kbm-restore',         
            'title' => 'Восстановление КМБ',
            ],
        ]);
        DB::table('co_all-pages__kbm-restore-result')->insert([
            [
            'name' => 'kbm-restore-result',         
            'title' => 'Восстановление КМБ-результат',
            ],
        ]);
        DB::table('co_all-pages__mulct-check')->insert([
            [
            'name' => 'mulct-check',    
            'title' => 'Проверка штрафов',
            ],
        ]);
        DB::table('co_all-pages__policy-check')->insert([
            [
            'name' => 'policy-check',       
            'title' => 'Проверка полиса',  
            ],
        ]);
        DB::table('co_all-pages__user-agreement')->insert([
            [
            'name' => 'user-agreement',    
            'title' => 'Пользовательское соглашение',
            ],
        ]);
        DB::table('co_all-pages__site-map')->insert([
            [
            'name' => 'site-map',
            'title' => 'Карта сайта',         
            ],
        ]);
        DB::table('co_all-pages__our-offices')->insert([
            [
            'name' => 'our-offices',
            'title' => 'Наши офисы',    
            ],
        ]);
        DB::table('co_all-pages__calculator')->insert([
            [
            'name' => 'calculator',
            'title' => 'Калькулятор',    
            ],
        ]);
        DB::table('co_all-pages__tech-inspection')->insert([
            [
            'name' => 'tech-inspection',   
            'title' => 'Техосмотр', 
            ],
        ]);        
        DB::table('co_all-pages__polis-check-auth')->insert([
            [
            'name' => 'polis-check-auth',
            'title' => 'Проверка полиса на подлинность',    
            ],
        ]);
    }
}
