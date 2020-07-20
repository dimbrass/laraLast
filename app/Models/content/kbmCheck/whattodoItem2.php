<?php

namespace App\Models\content\kbmCheck;

use Illuminate\Database\Eloquent\Model;

class whattodoItem2 extends Model
{
    // Связанная с моделью таблица
    protected $table = 'co_kbm-check__whattodo-item-2';

    // make all attributes mass assignable, except 'id'
    protected $guarded = ['id'];
  
    public $timestamps = false;

    public function page()
    {
        return $this->belongsTo('App\Models\content\kbmCheck\Page');
    }
}
