<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('authority');
        });
        
        //シフト代わってください
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(); //代わってほしい人
            $table->time('start_time');
            $table->time('end_time');
            $table->date('date');
            $table->boolean('approval'); //店長承認
        });
        
        //シフト代われます：対offer
        Schema::table('offer_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('offer_id'); //どの「代わってください」なのか
            $table->foreignId('user_id'); //代わってあげる人
            $table->time('start_time');
            $table->time('end_time');
            $table->boolean('approval'); //代わってほしい人が頼む人を選ぶ
        });
        
        //シフト代われます
        Schema::create('recruitmentrs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(); //代わってあげたい人
            $table->time('start_time');
            $table->time('end_time');
            $table->date('date');
            $table->boolean('approval'); //店長承認
        });
        
        //シフト代わってほしいです：対recruitments
        Schema::table('recruitment_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recruitment_id'); //どの「シフト代われます」なのか
            $table->foreignId('user_id'); //代わってほしい人
            $table->time('start_time');
            $table->time('end_time');
            $table->boolean('approval'); //代わりたい人がどの人と代わるのか選ぶ
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
