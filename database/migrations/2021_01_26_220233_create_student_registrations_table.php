<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_registrations', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
            $table->string('name', 100);
            $table->string('father_name', 100);
            $table->string('mother_name', 100);
            $table->integer('mobile_number');
            $table->date('date_of_birth');
            $table->string('batch_number', 50);
            $table->tinyInteger('gender')->comment="1=male, 2=female, 3=others";
            $table->integer('staff_id')->comment="FK of staff table";
            $table->string('qualification', 20);
            $table->tinyInteger('payment_getway_id')->comment="FK of payment_getways table";
            $table->tinyInteger('payment_status')->default(0);
            $table->tinyInteger('valid')->default(1);
            $table->softDeletes();
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
        Schema::dropIfExists('student_registrations');
    }
}
