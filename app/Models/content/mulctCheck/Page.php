<?php

namespace App\Models\content\mulctCheck;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    // Связанная с моделью таблица
    protected $table = 'co_all-pages__mulct-check';

    // make all attributes mass assignable, except 'id'
    protected $guarded = ['id'];
  
    public $timestamps = false;
  
    public function mulctGbdd()
    {
        return $this->hasOne('App\Models\content\mulct-check\mulctGbdd');
    }
    public function denyMulct()
    {
        return $this->hasOne('App\Models\content\mulct-check\denyMulct');
    }
    public function paidMulct()
    {
        return $this->hasOne('App\Models\content\mulct-check\paidMulct');
    }
    public function useful()
    {
        return $this->hasOne('App\Models\content\mulct-check\useful');
    }
    public function checkByLicense()
    {
        return $this->hasOne('App\Models\content\mulct-check\checkByLicense');
    }
    public function mulctItem()
    {
        return $this->hasOne('App\Models\content\mulct-check\mulctItem');
    }  
    public function mulctsToPay()
    {
        return $this->hasOne('App\Models\content\mulct-check\mulctsToPay');
    }
}
