<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expireance extends Model
{
    use HasFactory;
    protected $table="experience";
    protected $primarykey="id";
}
