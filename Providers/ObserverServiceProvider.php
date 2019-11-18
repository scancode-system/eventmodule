<?php

namespace Modules\Event\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Event\Entities\SettingEvent;
use Modules\Event\Observers\SettingEventObserver;


class ObserverServiceProvider extends ServiceProvider {

	public function boot() {
		SettingEvent::observe(SettingEventObserver::class);
	}

	public function register() {
        //
	}

}
