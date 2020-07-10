<?php

namespace App\Models\content\home;

use Illuminate\Database\Eloquent\Model;

class ourServisesTitle extends Model
{
    // Связанная с моделью таблица
    protected $table = 'co_home__our-servises-title';
  
    public $timestamps = false;

    public function page()
    {
        return $this->belongsTo('App\Models\content\home\Page');
    }
}
