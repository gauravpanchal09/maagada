<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePatientsColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->date('dob');
            $table->text('doctor');
            $table->text('husband_name');
            $table->date('husband_dob');
            $table->dropColumn('discharge_date');
            $table->dropColumn('price');
            $table->dropColumn('procedure');
            $table->dropColumn('age');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->dropColumn('dob');
            $table->dropColumn('doctor');
            $table->dropColumn('husband_name');
            $table->dropColumn('husband_dob');
            $table->date('discharge_date')->nullable();
            $table->integer('price')->nullable();
            $table->string('procedure')->nullable();
            $table->integer('age')->nullable();
        });
    }
}
