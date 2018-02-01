<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $fillable = [
    	'notice_type', 'notice_description','notice_date','notice_by'

    ];
}
