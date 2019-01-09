<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fuel_id')->unsigned()->nullable(false);
            $table->integer('provisioner_id')->unsigned()->nullable(false);
            $table->integer('amount')->unsigned()->nullable(false);
            $table->double('price')->unsigned()->nullable(false);
            $table->date('date')->nullable(false);
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
        Schema::dropIfExists('buyings');
    }
}
