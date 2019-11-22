<?php

namespace Modules\Event\Entities;

use Illuminate\Database\Eloquent\Model;

class SettingEvent extends Model
{
	protected $table = 'setting_event';
	protected $fillable = ['id', 'title', 'start', 'end', 'goal', 'goal_saller'];

	protected $appends = ['start_end_date'];

	protected $dates = [
		'start',
		'end'
	];

	public function getStartEndDateAttribute()
	{
		if(is_null($this->start) || is_null($this->end)){
			return null;
		} else {
			return $this->start->format('d/m/Y').' - '.$this->end->format('d/m/Y');
		}
	}

}
