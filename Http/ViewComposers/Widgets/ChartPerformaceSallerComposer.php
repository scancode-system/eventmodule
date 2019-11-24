<?php

namespace Modules\Event\Http\ViewComposers\Widgets;

use Modules\Dashboard\Services\ViewComposer\ServiceComposer; 
use Modules\Saller\Repositories\SallerRepository;
use Modules\Event\Repositories\SettingEventRepository;


class ChartPerformaceSallerComposer extends ServiceComposer {

    private $sallers;
    private $saller;

    public function assign($view){
        $this->sallers($view->orders_completed);
        $this->saller();
    }


    private function sallers($orders_completed){
        $goal = (SettingEventRepository::load())->goal_saller;
        $this->sallers = [];
        $orders_grouped_sallers = $orders_completed->groupBy('order_saller.saller_id');

        $this->sallers = $orders_grouped_sallers->map(function($orders, $name) use($goal) {
            $name = $orders->first()->order_saller->name;
            $sales = $orders->sum('total');
            $porcentage = 0;
            if($goal > 0) {
                $porcentage = ($sales*100)/$goal;
            }

            return (object)['percentage' => $porcentage, 'sales' => $sales, 'name' => $name, 'orders' => $orders->count(), 'average_ticket' => $orders->avg('total')];
        })->sortByDesc('sales');
    }

    private function saller(){
        $this->saller = $this->sallers->first();
    }

    public function view($view){
       $view->with('sallers', $this->sallers);
       $view->with('saller', $this->saller);
   }

}