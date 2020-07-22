<?php

namespace App\Models\content\userAgreement;

use Illuminate\Database\Eloquent\Model;

class pageTitle extends Model
{
    // Связанная с моделью таблица
    protected $table = 'co_user-agreement__page-title';

    // make all attributes mass assignable, except 'id'
    protected $guarded = ['id'];
  
    public $timestamps = false;

    public function page()
    {
        return $this->belongsTo('App\Models\content\kbmCheck\Page');
    }
}
