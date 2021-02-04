<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batches', function (Blueprint $table) {
            $table->id();
            $table->string('course_id')->comment = "foraign key of courses";
            $table->string('batch_number')->unique();
            $table->integer('weekly');
            $table->integer('course_price');
            $table->integer('total_month');
            $table->tinyInteger('status')->default(null)->comment = "1=publish, 2=unpublish";
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
        Schema::dropIfExists('batches');
    }
}
