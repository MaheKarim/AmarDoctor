<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hospital_name')->nullable();
            $table->string('patient_name')->nullable();
            $table->string('patient_number')->nullable();
            $table->string('doctor_name')->nullable();
            $table->string('amount')->nullable();
            $table->text('remarks')->nullable();
            $table->date('appoint_date')->nullable();
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
        Schema::dropIfExists('admin_forms');
    }
}
