<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYoungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('youngs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fio');
            $table->string('image');
            $table->string('player_number',10);
            $table->string('birthday');
            $table->integer('main_id')->default('1');
            $table->string('region');
            $table->integer('position_id');
            $table->integer('team_id');
            $table->string('weight')->default('65 kg');
            $table->string('height')->default('165 sm');
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
        Schema::dropIfExists('youngs');
    }
}
