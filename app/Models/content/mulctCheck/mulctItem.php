<?php

namespace App\Models\content\mulctCheck;

use Illuminate\Database\Eloquent\Model;

class mulctItem extends Model
{
    // Связанная с моделью таблица
    protected $table = 'co_mulct-check__mulct-item';

    // make all attributes mass assignable, except 'id'
    protected $guarded = ['id'];
  
    public $timestamps = false;

    public function page()
    {
        return $this->belongsTo('App\Models\content\kbmCheck\Page');
    }
}
