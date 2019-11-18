<?php

namespace Modules\Event\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Modules\Event\Http\ViewComposers\Settings\SettingComposer;


class ViewComposerServiceProvider extends ServiceProvider {

	public function boot() {
		// setting
		View::composer('event::loader.settings.body', SettingComposer::class);
	}

	public function register() {
        //
	}

}
