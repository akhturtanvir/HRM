<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
    	'user_id', 'department_name', 'department_address', 'department_details'
    ];
}
