<?php

namespace App\Models\content\home;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    // Связанная с моделью таблица
    protected $table = 'co_all-pages__home';

    // make all attributes mass assignable, except 'id'
    protected $guarded = ['id'];
  
    public $timestamps = false;
  
    public function insurance()
    {
        return $this->hasOne('App\Models\content\home\insurance');
    }
    public function ourServisesTitle()
    {
        return $this->hasOne('App\Models\content\home\ourServisesTitle');
    }
    public function ourServises()
    {
        return $this->hasOne('App\Models\content\home\ourServises');
    }
    public function autowishAbout()
    {
        return $this->hasOne('App\Models\content\home\autowishAbout');
    }
    public function autowishBenefits()
    {
        return $this->hasOne('App\Models\content\home\autowishBenefits');
    }
    public function autowishServisesTitle()
    {
        return $this->hasOne('App\Models\content\home\autowishServisesTitle');
    }
    public function autowishServises()
    {
        return $this->hasOne('App\Models\content\home\autowishServises');
    }
    public function smartSearch()
    {
        return $this->hasOne('App\Models\content\home\smartSearch');
    }
    public function socMedia()
    {
        return $this->hasOne('App\Models\content\home\socMedia');
    }
}