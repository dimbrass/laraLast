<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    // Связанная с моделью таблица
    protected $table = 'content__test__page__';

    // Массово присваиваемые атрибуты.
    protected $fillable = ['name', 'title'];

    public $timestamps = false;
}
