<?php

namespace App\Models\content\userAgreement;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    // Связанная с моделью таблица
    protected $table = 'co_all-pages__user-agreement';

    // make all attributes mass assignable, except 'id'
    protected $guarded = ['id'];
  
    public $timestamps = false;
  
    public function pageTitle()
    {
        return $this->hasOne('App\Models\content\user-agreement\pageTitle');
    }
    public function textBlock()
    {
        return $this->hasOne('App\Models\content\user-agreement\textBlock');
    }
}
