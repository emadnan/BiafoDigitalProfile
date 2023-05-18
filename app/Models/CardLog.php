<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardLog extends Model
{
    use HasFactory;
    protected $table = 'card_logs';
    protected $primaryKey = 'id';
}
