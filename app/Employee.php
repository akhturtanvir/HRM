<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
    	'user_id', 'firstname', 'lastname', 'city', 'email', 'gender', 'dob', 'postalcode', 'mobile'
    ];

    // public function employee_id(){
    // 	return $this-> hasOne(User::class);
    // }
}
