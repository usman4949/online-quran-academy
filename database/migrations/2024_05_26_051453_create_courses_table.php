<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id(); // ID
            $table->string('course_title'); // Course title
            $table->text('description'); // Description
            $table->string('duration'); // Duration
            $table->integer('price'); // Price
            $table->integer('join_students'); // Join Students
            $table->integer('certified_students'); // Certified Students
            $table->string('image'); // Image
            $table->string('status'); // Status
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
        Schema::dropIfExists('courses');
    }
}
