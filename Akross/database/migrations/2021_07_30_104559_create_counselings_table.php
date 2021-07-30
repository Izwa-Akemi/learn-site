<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCounselingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counselings', function (Blueprint $table) {
            $table->bigIncrements('councelling_id');//カウンセリングId
            $table->string('literacy');//リテラシー
            $table->string('counseling_result');//カウンセリング結果
            $table->date('decision_day');//意思決定予定日
            $table->integer('student_id');//生徒Id
            $table->integer('admin_id');//管理者Id
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
        Schema::dropIfExists('counselings');
    }
}
