<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['firstname', 'lastname', 'salary', 'phone'];

    public function workShifts() {
        return $this->belongsToMany('App\Models\Work_shift');
    }

    public function orders() {
        return $this->hasMany('App\Models\Order');
    }

}


