<?php

namespace App\Models\content;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
  // Связанная с моделью таблица
  protected $table = 'co_all-pages__home';

  public $timestamps = false;
}