<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->bigIncrements('unit_id'); //フォロー　Id
            $table->integer('councelling_detail_id'); //カウンセリング詳細_Id
            $table->string('unit'); //単元
            $table->integer('time_unit'); //単元時間
            $table->string('study_content'); //学習内容
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('units');
    }
}
