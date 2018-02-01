<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeaveApplication extends Model
{
    protected $fillable = [
    	'employee_name', 'apply_date', 'application_start_date',
    	'application_end_date', 'approve_start_date', 'approve_end_date',
    	'approve_date', 'reason', 'approve_by', 'leave_type'

    ];
}
