<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCounselingsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counseling_details', function (Blueprint $table) {
            $table->bigIncrements('councelling_detail_id'); //カウンセリング詳細　Id
            $table->integer('student_id'); //生徒Id
            $table->string('title'); //タイトル
            $table->string('goal'); //目標
            $table->string('overview'); //提案概要
            $table->integer('suggestion_hours'); //時間数
            $table->integer('class_time'); //時間
            $table->integer('how_many_times'); //回数
            $table->integer('fee'); //受講料
            $table->integer('point'); //ポイント
            $table->integer('no_admission_flg'); //入学金免除フラグ
            $table->boolean('monthly_fee'); //月謝
            $table->integer('discount_rate'); //割引
            $table->integer('admin_id'); //管理者Id
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
        Schema::dropIfExists('counseling_details');
    }
}
