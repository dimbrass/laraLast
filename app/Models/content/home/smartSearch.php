<?php

namespace App\Models\content\home;

use Illuminate\Database\Eloquent\Model;

class smartSearch extends Model
{
    // Связанная с моделью таблица
    protected $table = 'co_home__smart-search';
  
    public $timestamps = false;

    public function page()
    {
        return $this->belongsTo('App\Models\content\home\Page');
    }
}
