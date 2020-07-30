<?php

Route::prefix('setting_event')->middleware('auth')->group(function() {
	Route::put('', 'SettingEventController@update')->name('setting_event.update');

});