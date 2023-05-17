<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubscriptionInvoice extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="subscription_invoices";
    protected $primarykey="id";
    
    function company(){
        return $this->belongsTo('App\Models\Company','company_id','id');
    }
    function subscription(){
        return $this->belongsTo('App\Models\Subscription','subscription_id','id');
    }
}
