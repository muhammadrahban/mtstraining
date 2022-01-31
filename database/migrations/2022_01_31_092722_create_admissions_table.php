<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('lastname');
            $table->string('dob');
            $table->string('mobile');
            $table->string('email');
            $table->string('emergency_cell')->nullable();
            $table->string('gender')->nullable();
            $table->string('disabilities')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('postalcode')->nullable();
            $table->string('nationality')->nullable();
            $table->string('ni_number')->nullable();
            $table->string('passport_no')->nullable();
            $table->string('interested_course')->nullable();
            $table->string('other_course')->nullable();
            $table->string('find_by')->nullable();
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('admissions');
    }
}
