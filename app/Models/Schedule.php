<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = ['timework_id', 'employee_id', 'salary'];

    
    public function employees(){
        return $this->belongsToMany('App\Models\Employee');
    }       
    
}
