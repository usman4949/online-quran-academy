<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('course_id');
            $table->string('username');
            $table->string('fathername');
            $table->string('email')->unique();
            $table->date('birth');
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->string('whatsapp');
            $table->string('phone_number');
            $table->string('skype');
            $table->string('address');
            $table->integer('classes_per_week');
            $table->enum('contact_time', ['Morning', 'Day', 'Evening']);
            $table->string('teacher_gender');
            $table->string('country');
            $table->string('state');
            $table->string('language');
            $table->string('courses');
            $table->string('referred');
            $table->string('image');
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
        Schema::dropIfExists('registrations');
    }
}
