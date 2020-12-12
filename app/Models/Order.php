<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['employee_id', 'client_id', 'order_date', 
    'order_date_end', 'order_status', 'punishment', 'summ'];

    public function employee() {
        return $this->belongsTo('App\Models\Employee');
    }

    public function client() {
        return $this->belongsTo('App\Models\Client');
    }

    public function orderDetails() {
        return $this->belongsToMany('App\Models\Film');
    }

}
