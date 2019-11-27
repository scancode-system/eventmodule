<?php

namespace Modules\Event\Observers;

use Modules\Event\Entities\SettingEvent;
use Modules\Pdf\Repositories\SettingPdfRepository;
use Illuminate\Support\Facades\DB;

class SettingEventObserver
{

	public function updated(SettingEvent $setting_event)
	{

		if($setting_event->isDirty('title')){
			SettingPdfRepository::update(['title' => $setting_event->title]);
		}
	}	



}
