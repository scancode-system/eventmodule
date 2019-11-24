<?php

namespace Modules\Event\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Modules\Event\Http\ViewComposers\Settings\SettingComposer;
use Modules\Event\Http\ViewComposers\Widgets\ChartPerformaceSallerComposer;

class ViewComposerServiceProvider extends ServiceProvider {

	public function boot() {
		// setting
		View::composer('event::loader.settings.body', SettingComposer::class);

		// widgets
		View::composer('event::widgets.chart_performace_saller', ChartPerformaceSallerComposer::class);
	}

	public function register() {
        //
	}

}
