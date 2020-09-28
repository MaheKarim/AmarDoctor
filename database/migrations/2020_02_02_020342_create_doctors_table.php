<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('present_address')->nullable();
            $table->string('bmdc_reg_no')->nullable();
            $table->longText('work_exp')->nullable();
            $table->string('edu_degree')->nullable();
            $table->longText('about_me')->nullable();
            $table->string('bmdc_cer')->nullable();
            $table->string('nid_pic')->nullable();
            $table->integer('status')->default(1);
            $table->integer('area_name_id')->nullable();
            $table->integer('category_name_id')->nullable();
            $table->string('doctor_fees')->nullable();
            $table->integer('service_status_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('doctors');
    }
}
