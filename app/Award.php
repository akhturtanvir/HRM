<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    protected $fillable = [
    	'award_name', 'award_description', 'gift_item', 'date', 'employee_id', 'awarded_by'

    ];
}
