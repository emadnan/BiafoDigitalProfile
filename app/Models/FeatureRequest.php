<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class FeatureRequest extends Model
{

    use HasFactory;
    use SoftDeletes;
    protected $table = "feature_requests";
    protected $primarykey = "id";
}
