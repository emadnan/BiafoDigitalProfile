<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Card extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="cards";
    protected $primarykey="id";

    function country(){
        return $this->belongsTo('App\Models\Country','country_id','id');
    }
    function city(){
        return $this->belongsTo('App\Models\City','city_id','id');
    }
    function cardLogs(){
        return $this->hasMany('App\Models\CardLog','card_id','id');
    }
    function contactLogs(){
        return $this->hasMany('App\Models\ContactLog','card_id','id');
    }
}
