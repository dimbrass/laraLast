<?php

namespace App\Models\content\techInspection;

use Illuminate\Database\Eloquent\Model;

class orderItem extends Model
{
    // Связанная с моделью таблица
    protected $table = 'co_tech-inspection__order-item';

    // make all attributes mass assignable, except 'id'
    protected $guarded = ['id'];
  
    public $timestamps = false;

    public function page()
    {
        return $this->belongsTo('App\Models\content\techInspection\Page');
    }
}
