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
            $table->integer('user_id');
            $table->string('present_address')->nullable();
            $table->string('edu_inst')->nullable();
            $table->integer('passing_year')->nullable();
            $table->string('bmdc_reg_no')->nullable();
            $table->longText('work_exp')->nullable();
            $table->string('edu_degree')->nullable();
            $table->longText('about_me')->nullable();
            $table->string('bmdc_cer')->nullable();
            $table->string('nid_pic')->nullable();
            $table->integer('status')->default(1);
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
