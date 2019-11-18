<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_event', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title')->default('');
            $table->date('start')->nullable();
            $table->date('end')->nullable();
            $table->decimal('goal', 10, 2)->default(0);
            $table->decimal('goal_saller', 10, 2)->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setting_event');
    }
}
