<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reqs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('applicant_name')->nullable();
            $table->string('applicant_department')->nullable();
            $table->integer('applicant_phone')->nullable();
            $table->string('usage_course')->nullable();
            $table->string('usage_name')->nullable();
            $table->string('usage_department')->nullable();
            $table->integer('usage_people_num')->nullable();
            $table->string('usage_classroom')->nullable();
            $table->string('usage_software')->nullable();
            $table->string('type')->nullable();
            $table->integer('year_num')->nullable();
            $table->string('year_semester')->nullable();
            $table->date('date_start')->nullable();
            $table->date('date_finish')->nullable();
            $table->string('time')->nullable();
            $table->string('other_time')->nullable();
            $table->boolean('confirmed');
            $table->boolean('ended');
            $table->string('query_code');
            $table->string('img_url')->nullable();
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
        Schema::dropIfExists('reqs');
    }
}
