<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadAchievement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /*gather_name','gather_grade','gather_email','gather_phone','member1_name','member1_place','member1_email','member1_phone','member2_name','member2_place','member2_email','member2_phone','result_topic','result_intro','result_achievement','result_difficulty','keyword','accociate'
    */
    public function up()
    {
        Schema::create('achievements', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('term')->nullable();
            $table->string('gather_name')->nullable();
            $table->string('gather_grade')->nullable();
            $table->string('gather_email')->nullable();
            $table->string('gather_phone')->nullable();
            $table->string('field')->nullable();
            $table->string('member1_name')->nullable();
            $table->string('member1_place')->nullable();
            $table->string('member1_email')->nullable();
            $table->string('member1_phone')->nullable();
            $table->string('member2_name')->nullable();
            $table->string('member2_place')->nullable();
            $table->string('member2_email')->nullable();
            $table->string('member2_phone')->nullable();
            $table->string('result_topic')->nullable();
            $table->string('result_intro')->nullable();
            $table->string('result_achievement')->nullable();
            $table->string('result_difficulty')->nullable();
            $table->string('keyword')->nullable();
            $table->string('accociate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('achievements');
    }
}
