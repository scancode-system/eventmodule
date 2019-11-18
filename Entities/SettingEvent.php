<?php

namespace Modules\Event\Entities;

use Illuminate\Database\Eloquent\Model;

class SettingEvent extends Model
{
    protected $table = 'setting_event';
	protected $fillable = ['id', 'title', 'start', 'end', 'goal', 'goal_saller'];
}
