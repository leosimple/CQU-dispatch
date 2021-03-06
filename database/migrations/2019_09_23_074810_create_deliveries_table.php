<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('car_id')->comment('车辆id');
            $table->unsignedInteger('guest_id')->comment('来宾信息id');
            $table->timestamp('start_time')->comment('出发时间')->default("2019-09-23 00:00:00");
            $table->timestamp('back_time')->comment('返回时间')->default("2019-09-23 00:00:00");
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
        Schema::dropIfExists('deliveries');
    }
}
