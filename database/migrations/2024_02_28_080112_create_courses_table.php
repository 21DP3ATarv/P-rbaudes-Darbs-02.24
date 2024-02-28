<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateCoursesTable extends Migration
{
    public function up() //Izveido tabulu
    {
        Schema::create('Courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->text('description');
            $table->string('banner_adress');
            $table->integer('students_count');
            $table->timestamps();
        });
    }

    public function down() //Var izdzēst viņu
    {
        Schema::dropIfExists('courses');
    }
}

