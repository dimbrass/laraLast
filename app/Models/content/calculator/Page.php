<?php

namespace App\Models\content\calculator;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    // Связанная с моделью таблица
    protected $table = 'co_all-pages__Calculator';

    // make all attributes mass assignable, except 'id'
    protected $guarded = ['id'];
  
    public $timestamps = false;

    public function usefulInfoTop()
    {
        return $this->hasOne('App\Models\content\calculator\usefulInfoTop');
    }
    public function usefulInfoItem()
    {
        return $this->hasOne('App\Models\content\calculator\usefulInfoItem');
    }
}
