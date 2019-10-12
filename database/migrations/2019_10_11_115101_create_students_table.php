<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->enum('gender', ['Female', 'Male'])->default('Male');
            // $table->date('Y-m-d', strtotime('date'));
            $table->string('home_address');
            $table->string('contact_number');
            $table->string('student_picture')->default('https://via.placeholder.com/150');
            $table->string('guardian_name');
            $table->string('guardian_contact');
            $table->unsignedBigInteger('relationship_id');
            $table->timestamps();

            $table->foreign('relationship_id')
                ->references('id')
                ->on('relationships')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
