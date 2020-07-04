<?php

namespace App\Models\content;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
  // Связанная с моделью таблица
  protected $table = 'content__pages_home';

  public $timestamps = false;
}
