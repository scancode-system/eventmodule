<?php

namespace Modules\Event\Http\ViewComposers\Settings;

use Modules\Dashboard\Services\ViewComposer\ServiceComposer;
use Modules\Event\Repositories\SettingEventRepository;


class SettingComposer extends ServiceComposer {

    private $setting_event;

    public function assign($view){
        $this->setting_event();
    }


    private function setting_event(){
        $this->setting_event = SettingEventRepository::load();
    }


    public function view($view){
        $view->with('setting_event', $this->setting_event);
    }

}