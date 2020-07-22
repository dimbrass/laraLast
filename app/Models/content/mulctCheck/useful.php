<?php

namespace App\Models\content\mulctCheck;

use Illuminate\Database\Eloquent\Model;

class useful extends Model
{
    // Связанная с моделью таблица
    protected $table = 'co_mulct-check__useful';

    // make all attributes mass assignable, except 'id'
    protected $guarded = ['id'];
  
    public $timestamps = false;

    public function page()
    {
        return $this->belongsTo('App\Models\content\kbmCheck\Page');
    }
}
