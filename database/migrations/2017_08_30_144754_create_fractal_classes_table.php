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
            $table->string('unit')->nullable();
            $table->string('location')->nullable();
            $table->string('time')->nullable();
            $table->string('limit')->nullable();
            $table->string('teacher')->nullable();
            $table->string('email')->nullable();
            $table->string('teacher_intro')->nullable();
            $table->string('class_hr')->nullable();
            $table->string('auth_hr')->nullable();
            $table->string('class_intro')->nullable();
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
