<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInquirysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquirys', function (Blueprint $table) {
            $table->bigIncrements('inquiry_id');//問い合わせId
            $table->integer('student_id');//生徒Id
            $table->date('date');//日付
            $table->integer('type_form');//種別
            $table->string('student_name');//生徒氏名
            $table->string('student_tell');//生徒電話番号
            $table->string('student_address');//生徒住所
            $table->string('student_mail');//生徒メールアドレス
            $table->string('profession');//職業
            $table->string('corporation');//法人名
            $table->string('department');//部署名
            $table->tinyInteger('corporation_inquiry');//法人問い合わせ種別
            $table->date('sales_date');//営業希望日
            $table->time('sales_time');//営業指定時間
            $table->integer('tell_possibled');//電話可能時間
            $table->integer('week');//週
            $table->integer('reason');//理由
            $table->string('reason_anoher');//その他の理由
            $table->integer('master_skill');//習得スキル
            $table->string('master_skill_another');//習得スキルその他
            $table->integer('current_skill');//現在のスキル
            $table->string('current_skill_another');//現在のスキルその他
            $table->integer('know_trigger');//知ったきっかけ
            $table->string('know_trigger_another');//知ったきっかけその他
            $table->string('question');//質問・要望
            $table->date('reservation_day');//予約日時
            $table->integer('reservation_possible');//予約時間
            $table->string('teacher_id');//担当講師
            $table->string('another');//その他
            $table->string('admin_id')->nullable();//管理者ID
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
        Schema::dropIfExists('inquirys');
    }
}
