<?php

namespace App\Models\content\home;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    // Связанная с моделью таблица
    protected $table = 'co_all-pages__home';
  
    public $timestamps = false;
  
    public function insurance()
    {
        return $this->hasOne('App\Models\content\home\insurance');
    }
}