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
            $table->string('dob')->nullable();
            $table->string('present_address')->nullable();
            $table->string('passing_year')->nullable();
            $table->string('edu_institute')->nullable();
            $table->longText('bmdc_registration_number')->nullable();
            $table->string('experience')->nullable();
            $table->string('nid_card')->nullable();
            $table->string('reg_card')->nullable();
            $table->string('nurse_image')->nullable();
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
