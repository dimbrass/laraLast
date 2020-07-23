<?php

namespace App\Models\content\polisCheckAuth;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    // Связанная с моделью таблица
    protected $table = 'co_all-pages__polis-check-auth';

    // make all attributes mass assignable, except 'id'
    protected $guarded = ['id'];
  
    public $timestamps = false;

    public function top()
    {
        return $this->hasOne('App\Models\content\polisCheckAuth\Top');
    }
    public function item()
    {
        return $this->hasOne('App\Models\content\polisCheckAuth\Item');
    }
}
