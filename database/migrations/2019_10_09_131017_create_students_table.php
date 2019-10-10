<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**P
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->enum('gender',['Male','Female'])->default('Male');
            $table->date('birthdate');
            $table->string('home_address');
            $table->string('contact_number');
            $table->string('guardian_name');
            $table->unsignedBigInteger('relationsip_id');
            $table->string('guardian_contact');
            $table->string('student_picture');
            $table->timestamps();

            $table->foreign('relationsip_id')->references('id')->on('relationships')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
