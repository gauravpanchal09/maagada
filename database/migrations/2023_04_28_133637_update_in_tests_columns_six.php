<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateInTestsColumnsSix extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('in_tests', function (Blueprint $table) {
            $table->text('thawing_color')->nullable();
            $table->text('thawing_blast_formation')->nullable();
            $table->text('wife_ici_hcg_trigger')->nullable();
            $table->text('wife_ici_dose')->nullable();
            $table->text('wife_ici_datetime')->nullable();
            $table->text('wife_ici_iui')->nullable();
            $table->text('wife_ici_time')->nullable();
            $table->text('wife_ici_treatment_advice')->nullable();
            $table->text('wife_ici_fu_date')->nullable();
            $table->text('wife_ici_bhcg')->nullable();
            $table->text('wife_ici_result')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('in_tests', function (Blueprint $table) {
            $table->dropColumn('thawing_color');
            $table->dropColumn('thawing_blast_formation');
            $table->dropColumn('wife_ici_hcg_trigger');
            $table->dropColumn('wife_ici_dose');
            $table->dropColumn('wife_ici_datetime');
            $table->dropColumn('wife_ici_iui');
            $table->dropColumn('wife_ici_time');
            $table->dropColumn('wife_ici_treatment_advice');
            $table->dropColumn('wife_ici_fu_date');
            $table->dropColumn('wife_ici_bhcg');
            $table->dropColumn('wife_ici_result');
        });
    }
}
