<?php

namespace Modules\Event\Http\ViewComposers\Widgets;

use Modules\Dashboard\Services\ViewComposer\ServiceComposer; 
use Modules\Event\Repositories\SettingEventRepository;

class GoalComposer extends ServiceComposer 
{

    private $goal;
    private $current;
    private $porcentage;

    public function assign($view)
    {
        $this->goal();
        $this->current($view->orders_completed);
        $this->porcentage();
    }


    private function goal()
    {
        $this->goal = (SettingEventRepository::load())->goal;
    }

    private function current($orders_completed)
    {
        $this->current = $orders_completed->sum('total');
    }

    private function porcentage()
    {
        if($this->goal > 0)
        {
            $this->porcentage = ($this->current/$this->goal)*100;
            if($this->porcentage > 100)
            {
                $this->porcentage = 100;
            }
        }
    }


    public function view($view)
    {
        $view->with('goal', $this->goal);
        $view->with('current', $this->current);
        $view->with('porcentage', $this->porcentage);
    }

}