<?php

use Illuminate\Database\Seeder;

class coPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('co_pages')->insert([
            [
            'name' => 'home',         
            'title' => 'Главная страница',
            ],
            [
            'name' => 'osago',    
            'title' => 'Расчет ОСАГО',
            ],
            [
            'name' => 'tech-inspection',   
            'title' => 'Техосмотр', 
            ],
            [
            'name' => 'tech-inspection-item',         
            'title' => 'Страница одного пункта техосмотра',
            ],
            [
            'name' => 'kbm-check',    
            'title' => 'КМБ проверить',
            ],
            [
            'name' => 'kbm-restore',         
            'title' => 'КМБ восстановить',
            ],
            [
            'name' => 'mulct-check',    
            'title' => 'Проверка штрафов',
            ],
            [
            'name' => 'policy-check',       
            'title' => 'Проверка полиса',  
            ],
            [
            'name' => 'user-agreement',    
            'title' => 'Пользовательское соглашение',
            ],
            [
            'name' => 'site-map',
            'title' => 'Карта сайта',         
            ],
            [
            'name' => 'our-offices',
            'title' => 'Наши офисы',    
            ],
    ]);
    }
}
