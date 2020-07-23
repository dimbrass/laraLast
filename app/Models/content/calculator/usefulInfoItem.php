<?php

namespace App\Models\content\calculator;

use Illuminate\Database\Eloquent\Model;

class usefulInfoItem extends Model
{
    // Связанная с моделью таблица
    protected $table = 'co_calculator__useful-info-item';

    // make all attributes mass assignable, except 'id'
    protected $guarded = ['id'];
  
    public $timestamps = false;

    public function page()
    {
        return $this->belongsTo('App\Models\content\calculator\Page');
    }
}
