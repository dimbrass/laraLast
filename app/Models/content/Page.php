<?php

namespace App\Models\content;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    // Связанная с моделью таблица
    protected $table = 'content__page__page__';
  
    public $timestamps = false;
}