<?php

namespace Modules\Event\Observers;

use Modules\Event\Entities\SettingEvent;
use Modules\Order\Repositories\SettingOrderRepository;
use Illuminate\Support\Facades\DB;

class SettingEventObserver
{

	public function updated(SettingEvent $setting_event)
	{

		if($setting_event->isDirty('title')){
			SettingOrderRepository::update(['pdf_title' => $setting_event->title]);
		}
	}	



}
