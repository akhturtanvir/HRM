<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    protected $fillable = [
    	'holiday_name', 'holiday_start_from','holiday_end_to', 'number_of_days', 'announced_by'

    ];
}
