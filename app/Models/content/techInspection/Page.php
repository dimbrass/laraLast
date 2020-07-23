<?php

namespace App\Models\content\techInspection;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    // Связанная с моделью таблица
    protected $table = 'co_all-pages__Tech-inspection';

    // make all attributes mass assignable, except 'id'
    protected $guarded = ['id'];
  
    public $timestamps = false;

    public function top()
    {
        return $this->hasOne('App\Models\content\techInspection\Top');
    }
    public function order()
    {
        return $this->hasOne('App\Models\content\techInspection\Order');
    }
    public function item()
    {
        return $this->hasOne('App\Models\content\techInspection\Item');
    }
}
