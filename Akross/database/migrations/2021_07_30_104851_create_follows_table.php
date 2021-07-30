<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follows', function (Blueprint $table) {
            $table->bigIncrements('follow_id'); //フォロー　Id
            $table->date('follow_date');//フォロー日
            $table->boolean('follow_type'); //フォロー種別
            $table->integer('teacher_id'); //先生_Id
            $table->string('follow_contents'); //フォロー内容
            $table->integer('student_id'); //生徒Id
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
        Schema::dropIfExists('follows');
    }
}
