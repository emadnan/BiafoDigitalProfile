<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    protected $table="pricing";
    protected $primarykey="id";
    use HasFactory;
}
