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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('phone');
            $table->enum('gender', ['Male', 'Female'])->default('Male');
            $table->enum('course_of_study', ['Information Technology (IT)', 'Computer Science', 'Computer Technology', 'Computer Information Systems', 'Business Information Technology (BIT)', 'Software Engineering'])->default('Computer Science');
            $table->string('year_of_study')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('u_type', ['Admin', 'Student'])->default('Student');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
