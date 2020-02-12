<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nurses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('present_address')->nullable();
            $table->string('edu_institute')->nullable();
            $table->string('passing_year')->nullable();
            $table->string('experience')->nullable();
            $table->longText('nursing_reg_number')->nullable();
            $table->string('nid_card')->nullable();
            $table->string('reg_card')->nullable();
            $table->integer('area_name_id')->nullable();
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
        Schema::dropIfExists('nurses');
    }
}
