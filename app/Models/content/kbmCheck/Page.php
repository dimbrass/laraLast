<?php

namespace App\Models\content\kbmCheck;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    // Связанная с моделью таблица
    protected $table = 'co_all-pages__kbm-check';
  
    public $timestamps = false;
  
    public function kbmBonusMalus()
    {
        return $this->hasOne('App\Models\content\kbm-check\kbmBonusMalus');
    }
    public function whattodoTitle()
    {
        return $this->hasOne('App\Models\content\kbm-check\whattodoTitle');
    }
    public function whattodoItem_1()
    {
        return $this->hasOne('App\Models\content\kbm-check\whattodoItem_1');
    }
    public function whattodoItem_2()
    {
        return $this->hasOne('App\Models\content\kbm-check\whattodoItem_2');
    }
    public function whattodoItem_3()
    {
        return $this->hasOne('App\Models\content\kbm-check\whattodoItem_3');
    }
}
