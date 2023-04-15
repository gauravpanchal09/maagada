<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateInTestsColumnsOne extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('in_tests', function (Blueprint $table) {
            $table->text('wife_ici_endo_4')->nullable();
            $table->text('wife_ici_rtov_4')->nullable();
            $table->text('wife_ici_ltov_4')->nullable();
            $table->text('wife_ici_remark_4')->nullable();
            $table->text('wife_ici_day_5')->nullable();
            $table->date('wife_ici_date_5')->nullable();
            $table->text('wife_ici_endo_5')->nullable();
            $table->text('wife_ici_rtov_5')->nullable();
            $table->text('wife_ici_ltov_5')->nullable();
            $table->text('wife_ici_remark_5')->nullable();
            $table->text('wife_ici_day_6')->nullable();
            $table->date('wife_ici_date_6')->nullable();
            $table->text('wife_ici_endo_6')->nullable();
            $table->text('wife_ici_rtov_6')->nullable();
            $table->text('wife_ici_ltov_6')->nullable();
            $table->text('wife_ici_remark_6')->nullable();
            $table->text('wife_iuid_day_1')->nullable();
            $table->text('wife_iuid_volume_1')->nullable();
            $table->text('wife_iuid_native_couint_1')->nullable();
            $table->text('wife_iuid_motility1_1')->nullable();
            $table->text('wife_iuid_harvest_count_1')->nullable();
            $table->text('wife_iuid_motility2_1')->nullable();
            $table->text('wife_iuid_motility3_1')->nullable();
            $table->text('wife_iuid_remark_1')->nullable();
            $table->text('wife_iuid_day_2')->nullable();
            $table->text('wife_iuid_volume_2')->nullable();
            $table->text('wife_iuid_native_couint_2')->nullable();
            $table->text('wife_iuid_motility1_2')->nullable();
            $table->text('wife_iuid_harvest_count_2')->nullable();
            $table->text('wife_iuid_motility2_2')->nullable();
            $table->text('wife_iuid_motility3_2')->nullable();
            $table->text('wife_iuid_remark_2')->nullable();
            $table->text('wife_iuid_day_3')->nullable();
            $table->text('wife_iuid_volume_3')->nullable();
            $table->text('wife_iuid_native_couint_3')->nullable();
            $table->text('wife_iuid_motility1_3')->nullable();
            $table->text('wife_iuid_harvest_count_3')->nullable();
            $table->text('wife_iuid_motility2_3')->nullable();
            $table->text('wife_iuid_motility3_3')->nullable();
            $table->text('wife_iuid_remark_3')->nullable();
            $table->text('wife_iuid_day_4')->nullable();
            $table->text('wife_iuid_volume_4')->nullable();
            $table->text('wife_iuid_native_couint_4')->nullable();
            $table->text('wife_iuid_motility1_4')->nullable();
            $table->text('wife_iuid_harvest_count_4')->nullable();
            $table->text('wife_iuid_motility2_4')->nullable();
            $table->text('wife_iuid_motility3_4')->nullable();
            $table->text('wife_iuid_remark_4')->nullable();
            $table->text('wife_iuid_day_5')->nullable();
            $table->text('wife_iuid_volume_5')->nullable();
            $table->text('wife_iuid_native_couint_5')->nullable();
            $table->text('wife_iuid_motility1_5')->nullable();
            $table->text('wife_iuid_harvest_count_5')->nullable();
            $table->text('wife_iuid_motility2_5')->nullable();
            $table->text('wife_iuid_motility3_5')->nullable();
            $table->text('wife_iuid_remark_5')->nullable();
            $table->text('wife_iuid_day_6')->nullable();
            $table->text('wife_iuid_volume_6')->nullable();
            $table->text('wife_iuid_native_couint_6')->nullable();
            $table->text('wife_iuid_motility1_6')->nullable();
            $table->text('wife_iuid_harvest_count_6')->nullable();
            $table->text('wife_iuid_motility2_6')->nullable();
            $table->text('wife_iuid_motility3_6')->nullable();
            $table->text('wife_iuid_remark_6')->nullable();
            $table->text('result_description')->nullable();
            $table->date('result_tton')->nullable();
            $table->text('result_remarks')->nullable();
            $table->text('result_by')->nullable();
            $table->text('wife_lmp_oc_begin')->nullable();
            $table->text('wife_lmp_oc_stopped')->nullable();
            $table->text('wife_lmp_oc_tco')->nullable();
            $table->text('wife_lmp_telephone_begin')->nullable();
            $table->text('wife_lmp_telephone_stopped')->nullable();
            $table->text('wife_lmp_telephone_tco')->nullable();
            $table->text('wife_lmp_discussion_begin')->nullable();
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
            $table->dropColumn('wife_ici_endo_4');
            $table->dropColumn('wife_ici_rtov_4');
            $table->dropColumn('wife_ici_ltov_4');
            $table->dropColumn('wife_ici_remark_4');
            $table->dropColumn('wife_ici_day_5');
            $table->dropColumn('wife_ici_date_5');
            $table->dropColumn('wife_ici_endo_5');
            $table->dropColumn('wife_ici_rtov_5');
            $table->dropColumn('wife_ici_ltov_5');
            $table->dropColumn('wife_ici_remark_5');
            $table->dropColumn('wife_ici_day_6');
            $table->dropColumn('wife_ici_date_6');
            $table->dropColumn('wife_ici_endo_6');
            $table->dropColumn('wife_ici_rtov_6');
            $table->dropColumn('wife_ici_ltov_6');
            $table->dropColumn('wife_ici_remark_6');
            $table->dropColumn('wife_iuid_day_1');
            $table->dropColumn('wife_iuid_volume_1');
            $table->dropColumn('wife_iuid_native_couint_1');
            $table->dropColumn('wife_iuid_motility1_1');
            $table->dropColumn('wife_iuid_harvest_count_1');
            $table->dropColumn('wife_iuid_motility2_1');
            $table->dropColumn('wife_iuid_motility3_1');
            $table->dropColumn('wife_iuid_remark_1');
            $table->dropColumn('wife_iuid_day_2');
            $table->dropColumn('wife_iuid_volume_2');
            $table->dropColumn('wife_iuid_native_couint_2');
            $table->dropColumn('wife_iuid_motility1_2');
            $table->dropColumn('wife_iuid_harvest_count_2');
            $table->dropColumn('wife_iuid_motility2_2');
            $table->dropColumn('wife_iuid_motility3_2');
            $table->dropColumn('wife_iuid_remark_2');
            $table->dropColumn('wife_iuid_day_3');
            $table->dropColumn('wife_iuid_volume_3');
            $table->dropColumn('wife_iuid_native_couint_3');
            $table->dropColumn('wife_iuid_motility1_3');
            $table->dropColumn('wife_iuid_harvest_count_3');
            $table->dropColumn('wife_iuid_motility2_3');
            $table->dropColumn('wife_iuid_motility3_3');
            $table->dropColumn('wife_iuid_remark_3');
            $table->dropColumn('wife_iuid_day_4');
            $table->dropColumn('wife_iuid_volume_4');
            $table->dropColumn('wife_iuid_native_couint_4');
            $table->dropColumn('wife_iuid_motility1_4');
            $table->dropColumn('wife_iuid_harvest_count_4');
            $table->dropColumn('wife_iuid_motility2_4');
            $table->dropColumn('wife_iuid_motility3_4');
            $table->dropColumn('wife_iuid_remark_4');
            $table->dropColumn('wife_iuid_day_5');
            $table->dropColumn('wife_iuid_volume_5');
            $table->dropColumn('wife_iuid_native_couint_5');
            $table->dropColumn('wife_iuid_motility1_5');
            $table->dropColumn('wife_iuid_harvest_count_5');
            $table->dropColumn('wife_iuid_motility2_5');
            $table->dropColumn('wife_iuid_motility3_5');
            $table->dropColumn('wife_iuid_remark_5');
            $table->dropColumn('wife_iuid_day_6');
            $table->dropColumn('wife_iuid_volume_6');
            $table->dropColumn('wife_iuid_native_couint_6');
            $table->dropColumn('wife_iuid_motility1_6');
            $table->dropColumn('wife_iuid_harvest_count_6');
            $table->dropColumn('wife_iuid_motility2_6');
            $table->dropColumn('wife_iuid_motility3_6');
            $table->dropColumn('wife_iuid_remark_6');
            $table->dropColumn('result_description');
            $table->dropColumn('result_tton');
            $table->dropColumn('result_remarks');
            $table->dropColumn('result_by');
            $table->dropColumn('wife_lmp_oc_begin');
            $table->dropColumn('wife_lmp_oc_stopped');
            $table->dropColumn('wife_lmp_oc_tco');
            $table->dropColumn('wife_lmp_telephone_begin');
            $table->dropColumn('wife_lmp_telephone_stopped');
            $table->dropColumn('wife_lmp_telephone_tco');
            $table->dropColumn('wife_lmp_discussion_begin');
        });
    }
}
