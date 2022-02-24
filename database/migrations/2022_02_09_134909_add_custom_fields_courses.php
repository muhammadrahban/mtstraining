<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCustomFieldsCourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('duration')->after('short_desc');
            $table->string('earning')->after('duration');
            $table->string('ageLimit')->after('earning');
            $table->string('price')->after('ageLimit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('duration');
            $table->dropColumn('earning');
            $table->dropColumn('ageLimit');
            $table->dropColumn('price');
            $table->dropColumn('desc');
        });
    }
}
