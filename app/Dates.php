<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dates extends Model
{

	protected $table = 'meeting_dates';
    // public function relatedMeeting()
    // {
    // 	$this->hasOne('Meeting', 'foreign_id', 'url_id');
    // }
}
