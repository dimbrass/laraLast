<?php

namespace App\Models\content\kbmRestore;

use Illuminate\Database\Eloquent\Model;

class restoreByBroker extends Model
{
    // Связанная с моделью таблица
    protected $table = 'co_kbm-restore__restore-by-broker';

    // make all attributes mass assignable, except 'id'
    protected $guarded = ['id'];
  
    public $timestamps = false;

    public function page()
    {
        return $this->belongsTo('App\Models\content\kbmRestore\Page');
    }
}
