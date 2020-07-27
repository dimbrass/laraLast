<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    // Связанная с моделью таблица
    protected $table = 'user_info';

    // // make all attributes mass assignable, except 'id'
    // protected $guarded = ['id'];
  
    // public $timestamps = false;

    public function page()
    {
        return $this->belongsTo('User::class');
    }
}
