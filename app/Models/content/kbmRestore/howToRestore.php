<?php

namespace App\Models\content\kbmRestore;

use Illuminate\Database\Eloquent\Model;

class howToRestore extends Model
{
    // Связанная с моделью таблица
    protected $table = 'co_kbm-restore__how-to-restore';

    // make all attributes mass assignable, except 'id'
    protected $guarded = ['id'];
  
    public $timestamps = false;

    public function page()
    {
        return $this->belongsTo('App\Models\content\kbmRestore\Page');
    }
}
