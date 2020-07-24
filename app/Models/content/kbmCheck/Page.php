<?php

namespace App\Models\content\kbmCheck;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    // Связанная с моделью таблица
    protected $table = 'co_all-pages__kbm-check';

    // make all attributes mass assignable, except 'id'
    protected $guarded = ['id'];
  
    public $timestamps = false;
  
    public function kbmBonusMalus()
    {
        return $this->hasOne('App\Models\content\kbm-check\kbmBonusMalus');
    }
    public function whattodoTitle()
    {
        return $this->hasOne('App\Models\content\kbm-check\whattodoTitle');
    }
    public function whattodoItem()
    {
        return $this->hasOne('App\Models\content\kbm-check\whattodoItem');
    }
    public function table()
    {
        return $this->hasOne('App\Models\content\kbm-check\table');
    }
