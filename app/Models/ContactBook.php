<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactBook extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'contact_books';
    protected $primaryKey = 'id';

    function profile()
    {
        return $this->belongsTo(Profile::class, 'profile_id', 'id');
    }
}
