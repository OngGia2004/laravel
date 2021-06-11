<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table="bill";
    public function  bill_detail()
    {
        return $this->hasMay('App\Bill_detail',"id_bill","id");
    }
    public function  customer()
    {
        return $this->belongsTo('App\Customer',"id_customer","id");
    }
}
