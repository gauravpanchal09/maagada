<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAncTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('anc_tests', function (Blueprint $table) {
            $table->dropColumn('general_examination_height');
            $table->dropColumn('general_examination_weight');
            $table->dropColumn('general_examination_pallor');
            $table->dropColumn('general_examination_heart');
            $table->dropColumn('general_examination_lungs');
            $table->dropColumn('general_examination_varicoseveios');
            $table->dropColumn('general_examination_breasts');
            $table->text('general_examination')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('anc_tests', function (Blueprint $table) {
            $table->dropColumn('general_examination');
            $table->bigInteger('general_examination_height')->nullable();
            $table->bigInteger('general_examination_weight')->nullable();
            $table->string('general_examination_pallor')->nullable();
            $table->string('general_examination_heart')->nullable();
            $table->string('general_examination_lungs')->nullable();
            $table->string('general_examination_varicoseveios')->nullable();
            $table->string('general_examination_breasts')->nullable();
        });
    }
}
