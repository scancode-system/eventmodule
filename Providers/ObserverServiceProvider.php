<?php

namespace Modules\Event\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Event\Entities\SettingEvent;
use Modules\Event\Observers\SettingEventObserver;
use Modules\Client\Entities\Client;
use Modules\Event\Observers\ClientObserver;


class ObserverServiceProvider extends ServiceProvider {

	public function boot() {
		SettingEvent::observe(SettingEventObserver::class);
		Client::observe(ClientObserver::class);
	}

	public function register() {
        //
	}

}
