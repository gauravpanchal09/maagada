<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateInTestsColumnsFive extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('in_tests', function (Blueprint $table) {
            $table->string('mh_previous_cycle')->nullable()->change();
            $table->string('mh_present_cycle')->nullable()->change();
            $table->text('ivf_no2pn_1')->nullable();
            $table->text('ivf_2pn_1')->nullable();
            $table->text('ivf_discard_1')->nullable();
            $table->text('icsi_no2pn_1')->nullable();
            $table->text('icsi_2pn_1')->nullable();
            $table->text('icsi_discard_1')->nullable();
            $table->text('ivf_no2pn_2')->nullable();
            $table->text('ivf_2pn_2')->nullable();
            $table->text('ivf_discard_2')->nullable();
            $table->text('icsi_no2pn_2')->nullable();
            $table->text('icsi_2pn_2')->nullable();
            $table->text('icsi_discard_2')->nullable();
            $table->text('ivf_no2pn_3')->nullable();
            $table->text('ivf_2pn_3')->nullable();
            $table->text('ivf_discard_3')->nullable();
            $table->text('icsi_no2pn_3')->nullable();
            $table->text('icsi_2pn_3')->nullable();
            $table->text('icsi_discard_3')->nullable();
            $table->text('ivf_no2pn_4')->nullable();
            $table->text('ivf_2pn_4')->nullable();
            $table->text('ivf_discard_4')->nullable();
            $table->text('icsi_no2pn_4')->nullable();
            $table->text('icsi_2pn_4')->nullable();
            $table->text('icsi_discard_4')->nullable();
            $table->text('ivf_no2pn_5')->nullable();
            $table->text('ivf_2pn_5')->nullable();
            $table->text('ivf_discard_5')->nullable();
            $table->text('icsi_no2pn_5')->nullable();
            $table->text('icsi_2pn_5')->nullable();
            $table->text('icsi_discard_5')->nullable();
            $table->text('treatment_plan')->nullable();
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
            $table->date('mh_previous_cycle')->nullable()->change();
            $table->date('mh_present_cycle')->nullable()->change();
            $table->dropColumn('ivf_no2pn_1');
            $table->dropColumn('ivf_2pn_1');
            $table->dropColumn('ivf_discard_1');
            $table->dropColumn('icsi_no2pn_1');
            $table->dropColumn('icsi_2pn_1');
            $table->dropColumn('icsi_discard_1');
            $table->dropColumn('ivf_no2pn_2');
            $table->dropColumn('ivf_2pn_2');
            $table->dropColumn('ivf_discard_2');
            $table->dropColumn('icsi_no2pn_2');
            $table->dropColumn('icsi_2pn_2');
            $table->dropColumn('icsi_discard_2');
            $table->dropColumn('ivf_no2pn_3');
            $table->dropColumn('ivf_2pn_3');
            $table->dropColumn('ivf_discard_3');
            $table->dropColumn('icsi_no2pn_3');
            $table->dropColumn('icsi_2pn_3');
            $table->dropColumn('icsi_discard_3');
            $table->dropColumn('ivf_no2pn_4');
            $table->dropColumn('ivf_2pn_4');
            $table->dropColumn('ivf_discard_4');
            $table->dropColumn('icsi_no2pn_4');
            $table->dropColumn('icsi_2pn_4');
            $table->dropColumn('icsi_discard_4');
            $table->dropColumn('ivf_no2pn_5');
            $table->dropColumn('ivf_2pn_5');
            $table->dropColumn('ivf_discard_5');
            $table->dropColumn('icsi_no2pn_5');
            $table->dropColumn('icsi_2pn_5');
            $table->dropColumn('icsi_discard_5');
            $table->dropColumn('treatment_plan');
        });
    }
}
