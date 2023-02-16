<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='companies';
    protected $primaryKey='id';
    function city()
    {
        return $this->belongsTo(City::class,'city_id','id');
    }
    function country(){
        return $this->belongsTo(Country::class,'country_id','id');
    }
}
