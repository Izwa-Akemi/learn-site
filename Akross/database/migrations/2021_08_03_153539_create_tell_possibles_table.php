<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTellPossiblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tell_possibles', function (Blueprint $table) {
            $table->bigIncrements('tell_possibled_id'); //フォロー　Id
            $table->string('tell_possibled'); //電話可能時間
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tell_possibles');
    }
}
