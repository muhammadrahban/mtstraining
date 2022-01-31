<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->integer("course_id");
            $table->string("location");
            $table->date("date_from");
            $table->date("date_to");
            $table->string("first_name");
            $table->string("last_name");
            $table->string("mobile");
            $table->string("email");
            $table->string("address");
            $table->string("payment_method");
            $table->string("payment_mode");
            $table->decimal("fullamount", 12, 2);
            $table->decimal("paid", 12, 2);
            $table->string("transection_id");
            $table->string("status");
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
        Schema::dropIfExists('appointments');
    }
}
