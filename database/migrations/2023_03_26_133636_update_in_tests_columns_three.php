<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateInTestsColumnsThree extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('in_tests', function (Blueprint $table) {
            $table->text('result_end_9')->nullable();
            $table->text('result_rafc_9')->nullable();
            $table->text('result_lafc_9')->nullable();
            $table->text('result_stimulation_9')->nullable();
            $table->text('result_misc_9')->nullable();
            $table->date('result_date_10')->nullable();
            $table->text('result_cyc_day_10')->nullable();
            $table->text('result_stm_day_10')->nullable();
            $table->text('result_end_10')->nullable();
            $table->text('result_rafc_10')->nullable();
            $table->text('result_lafc_10')->nullable();
            $table->text('result_stimulation_10')->nullable();
            $table->text('result_misc_10')->nullable();
            $table->date('result_date_11')->nullable();
            $table->text('result_cyc_day_11')->nullable();
            $table->text('result_stm_day_11')->nullable();
            $table->text('result_end_11')->nullable();
            $table->text('result_rafc_11')->nullable();
            $table->text('result_lafc_11')->nullable();
            $table->text('result_stimulation_11')->nullable();
            $table->text('result_misc_11')->nullable();
            $table->date('result_date_12')->nullable();
            $table->text('result_cyc_day_12')->nullable();
            $table->text('result_stm_day_12')->nullable();
            $table->text('result_end_12')->nullable();
            $table->text('result_rafc_12')->nullable();
            $table->text('result_lafc_12')->nullable();
            $table->text('result_stimulation_12')->nullable();
            $table->text('result_misc_12')->nullable();
            $table->date('result_date_13')->nullable();
            $table->text('result_cyc_day_13')->nullable();
            $table->text('result_stm_day_13')->nullable();
            $table->text('result_end_13')->nullable();
            $table->text('result_rafc_13')->nullable();
            $table->text('result_lafc_13')->nullable();
            $table->text('result_stimulation_13')->nullable();
            $table->text('result_misc_13')->nullable();
            $table->date('result_date_14')->nullable();
            $table->text('result_cyc_day_14')->nullable();
            $table->text('result_stm_day_14')->nullable();
            $table->text('result_end_14')->nullable();
            $table->text('result_rafc_14')->nullable();
            $table->text('result_lafc_14')->nullable();
            $table->text('result_stimulation_14')->nullable();
            $table->text('result_misc_14')->nullable();
            $table->date('result_date_15')->nullable();
            $table->text('result_cyc_day_15')->nullable();
            $table->text('result_stm_day_15')->nullable();
            $table->text('result_end_15')->nullable();
            $table->text('result_rafc_15')->nullable();
            $table->text('result_lafc_15')->nullable();
            $table->text('result_stimulation_15')->nullable();
            $table->text('result_misc_15')->nullable();
            $table->date('result_date_16')->nullable();
            $table->text('result_cyc_day_16')->nullable();
            $table->text('result_stm_day_16')->nullable();
            $table->text('result_end_16')->nullable();
            $table->text('result_rafc_16')->nullable();
            $table->text('result_lafc_16')->nullable();
            $table->text('result_stimulation_16')->nullable();
            $table->text('result_misc_16')->nullable();
            $table->text('wife_lmp_lh')->nullable();
            $table->text('wife_lmp_e2')->nullable();
            $table->text('wife_lmp_inj')->nullable();
            $table->text('wife_lmp_dose')->nullable();
            $table->text('wife_lmp_hcg')->nullable();
            $table->text('wife_lmp_hcg_day')->nullable();
            $table->text('wife_lmp_opu')->nullable();
            $table->text('wife_lmp_ampm')->nullable();
            $table->text('sperm_source_folliciles_right')->nullable();
            $table->text('sperm_source_folliciles_left')->nullable();
            $table->text('sperm_source_folliciles_total')->nullable();
            $table->text('sperm_source_ovum_right')->nullable();
            $table->text('sperm_source_ovum_left')->nullable();
            $table->text('sperm_source_ovum_pod')->nullable();
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
            $table->dropColumn('result_end_9');
            $table->dropColumn('result_rafc_9');
            $table->dropColumn('result_lafc_9');
            $table->dropColumn('result_stimulation_9');
            $table->dropColumn('result_misc_9');
            $table->dropColumn('result_date_10');
            $table->dropColumn('result_cyc_day_10');
            $table->dropColumn('result_stm_day_10');
            $table->dropColumn('result_end_10');
            $table->dropColumn('result_rafc_10');
            $table->dropColumn('result_lafc_10');
            $table->dropColumn('result_stimulation_10');
            $table->dropColumn('result_misc_10');
            $table->dropColumn('result_date_11');
            $table->dropColumn('result_cyc_day_11');
            $table->dropColumn('result_stm_day_11');
            $table->dropColumn('result_end_11');
            $table->dropColumn('result_rafc_11');
            $table->dropColumn('result_lafc_11');
            $table->dropColumn('result_stimulation_11');
            $table->dropColumn('result_misc_11');
            $table->dropColumn('result_date_12');
            $table->dropColumn('result_cyc_day_12');
            $table->dropColumn('result_stm_day_12');
            $table->dropColumn('result_end_12');
            $table->dropColumn('result_rafc_12');
            $table->dropColumn('result_lafc_12');
            $table->dropColumn('result_stimulation_12');
            $table->dropColumn('result_misc_12');
            $table->dropColumn('result_date_13');
            $table->dropColumn('result_cyc_day_13');
            $table->dropColumn('result_stm_day_13');
            $table->dropColumn('result_end_13');
            $table->dropColumn('result_rafc_13');
            $table->dropColumn('result_lafc_13');
            $table->dropColumn('result_stimulation_13');
            $table->dropColumn('result_misc_13');
            $table->dropColumn('result_date_14');
            $table->dropColumn('result_cyc_day_14');
            $table->dropColumn('result_stm_day_14');
            $table->dropColumn('result_end_14');
            $table->dropColumn('result_rafc_14');
            $table->dropColumn('result_lafc_14');
            $table->dropColumn('result_stimulation_14');
            $table->dropColumn('result_misc_14');
            $table->dropColumn('result_date_15');
            $table->dropColumn('result_cyc_day_15');
            $table->dropColumn('result_stm_day_15');
            $table->dropColumn('result_end_15');
            $table->dropColumn('result_rafc_15');
            $table->dropColumn('result_lafc_15');
            $table->dropColumn('result_stimulation_15');
            $table->dropColumn('result_misc_15');
            $table->dropColumn('result_date_16');
            $table->dropColumn('result_cyc_day_16');
            $table->dropColumn('result_stm_day_16');
            $table->dropColumn('result_end_16');
            $table->dropColumn('result_rafc_16');
            $table->dropColumn('result_lafc_16');
            $table->dropColumn('result_stimulation_16');
            $table->dropColumn('result_misc_16');
            $table->dropColumn('wife_lmp_lh');
            $table->dropColumn('wife_lmp_e2');
            $table->dropColumn('wife_lmp_inj');
            $table->dropColumn('wife_lmp_dose');
            $table->dropColumn('wife_lmp_hcg');
            $table->dropColumn('wife_lmp_hcg_day');
            $table->dropColumn('wife_lmp_opu');
            $table->dropColumn('wife_lmp_ampm');
            $table->dropColumn('sperm_source_folliciles_right');
            $table->dropColumn('sperm_source_folliciles_left');
            $table->dropColumn('sperm_source_folliciles_total');
            $table->dropColumn('sperm_source_ovum_right');
            $table->dropColumn('sperm_source_ovum_left');
            $table->dropColumn('sperm_source_ovum_pod');
        });
    }
}
