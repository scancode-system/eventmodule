<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Dashboard\Repositories\WidgetRepository;

class InsertWidgetsRecordsEvent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        WidgetRepository::storeMany([
            ['name' => 'Gráfico - Performace dos Representantes', 'columns' => 12, 'view' => 'event::widgets.chart_performace_saller'],
            ['name' => 'Gráfico - Meta Geral', 'columns' => 12, 'view' => 'event::widgets.goal']        
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        WidgetRepository::removeByName('Gráfico - Performace dos Representantes');
    }
}
