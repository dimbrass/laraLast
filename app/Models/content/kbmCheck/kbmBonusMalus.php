<?php

namespace App\Models\content\kbmCheck;

use Illuminate\Database\Eloquent\Model;

class kbmBonusMalus extends Model
{
    // Связанная с моделью таблица
    protected $table = 'co_kbm-check__kbm-bonus-malus';
  
    public $timestamps = false;

    public function page()
    {
        return $this->belongsTo('App\Models\content\kbmCheck\Page');
    }
}
