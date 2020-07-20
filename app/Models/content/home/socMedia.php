<?php

namespace App\Models\content\home;

use Illuminate\Database\Eloquent\Model;

class socMedia extends Model
{
    // Связанная с моделью таблица
    protected $table = 'co_home__soc-media';

    // make all attributes mass assignable, except 'id'
    protected $guarded = ['id'];
  
    public $timestamps = false;

    public function page()
    {
        return $this->belongsTo('App\Models\content\home\Page');
    }
}
