<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('case_title');
            $table->string('grade');
            $table->string('penalty');
            $table->mediumText('complains');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('adviser_id');
            $table->unsignedBigInteger('student_id');
            $table->timestamps();

            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('adviser_id')->references('id')->on('advisers')->onDelete('cascade')->onUpdate('cascade');

             $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('records');
    }
}
