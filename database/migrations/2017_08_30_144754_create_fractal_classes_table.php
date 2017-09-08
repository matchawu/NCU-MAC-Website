<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFractalClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fractal_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('term')->nullable();
            $table->string('name')->nullable();
            $table->string('code')->nullable();
            $table->string('field')->nullable();
            $table->string('other_field')->nullable();
            $table->string('unit')->nullable();
            $table->string('location')->nullable();
            $table->string('start')->nullable();
            $table->string('end')->nullable();
            $table->string('date1')->nullable();
            $table->string('date2')->nullable();
            $table->string('date3')->nullable();
            $table->string('date4')->nullable();
            $table->string('date5')->nullable();
            $table->string('date6')->nullable();
            $table->string('limit')->nullable();
            $table->string('teacher')->nullable();
            $table->string('email')->nullable();
            $table->string('teacher_intro')->nullable();
            $table->string('class_hr')->nullable();
            $table->string('auth_hr')->nullable();
            $table->string('class_intro')->nullable();
            $table->string('comment')->nullable();
            $table->string('dateNum')->nullable();
            $table->string('keyword')->nullable();
            $table->string('video')->nullable();
            $table->string('account')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fractal_classes');
    }
}
