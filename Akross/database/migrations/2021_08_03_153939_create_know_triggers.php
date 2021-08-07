<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKnowTriggers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('know_triggers', function (Blueprint $table) {
            $table->bigIncrements('know_trigger_id'); //知ったきっかけ　Id
            $table->string('know_trigger'); //知ったきっかけスキル
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('know_triggers');
    }
}
