<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Modules\Dashboard\Repositories\ReportRepository;

class InsertReportsRecordsModuleEvent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        ReportRepository::newByCategory(['module' => 'Event', 'export' => 'ClientsNewExport', 'alias' => 'Clientes Novos'], 'Evento');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        ReportRepository::deleteByAlias('Clientes Novos');
    }
}
