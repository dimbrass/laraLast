<?php

namespace App\Models\content\kbmRestore;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    // Связанная с моделью таблица
    protected $table = 'co_all-pages__kbm-restore';

    // make all attributes mass assignable, except 'id'
    protected $guarded = ['id'];
  
    public $timestamps = false;
  
    public function howToRestore()
    {
        return $this->hasOne('App\Models\content\kbm-restore\howToRestore');
    }
    public function restoreBySb()
    {
        return $this->hasOne('App\Models\content\kbm-restore\restoreBySb');
    }
    public function restoreByInsurance()
    {
        return $this->hasOne('App\Models\content\kbm-restore\restoreByInsurance');
    }
    public function restoreByBroker()
    {
        return $this->hasOne('App\Models\content\kbm-restore\restoreByBroker');
    }
    public function restoreByRsa()
    {
        return $this->hasOne('App\Models\content\kbm-restore\restoreByRsa');
    }
    public function restoreQuick()
    {
        return $this->hasOne('App\Models\content\kbm-restore\restoreQuick');
    }
}
