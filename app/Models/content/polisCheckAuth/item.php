<?php

namespace App\Models\content\polisCheckAuth;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    // Связанная с моделью таблица
    protected $table = 'co_polis-check-auth__item';

    // make all attributes mass assignable, except 'id'
    protected $guarded = ['id'];
  
    public $timestamps = false;

    public function page()
    {
        return $this->belongsTo('App\Models\content\polisCheckAuth\Page');
    }
}
