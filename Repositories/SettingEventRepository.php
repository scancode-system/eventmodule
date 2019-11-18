<?php

namespace Modules\Event\Repositories;

use Modules\Event\Entities\SettingEvent;


class SettingEventRepository
{

	public static function load(){
		return SettingEvent::first();
	}

	public static function update($data){
		(SettingEvent::first())->update($data);
	}

}
