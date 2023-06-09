<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateInTestsColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('in_tests', function (Blueprint $table) {
            $table->text('husband_pmh_mumps')->nullable();
            $table->text('husband_pmh_kochs')->nullable();
            $table->text('husband_pmh_diabetes')->nullable();
            $table->text('husband_pmh_hypertension')->nullable();
            $table->text('husband_pmh_previous_sergery')->nullable();
            $table->text('husband_pmh_examination')->nullable();
            $table->text('husband_pmh_stature')->nullable();
            $table->text('husband_pmh_bp')->nullable();
            $table->text('husband_pmh_sec_sex')->nullable();
            $table->text('husband_pmh_genital_examination')->nullable();
            $table->text('husband_testicular_biospy')->nullable();
            $table->text('husband_other_investigationq')->nullable();
            $table->text('husband_te_advised')->nullable();
            $table->text('husband_i_cbc')->nullable();
            $table->text('husband_i_hb')->nullable();
            $table->text('husband_i_td')->nullable();
            $table->text('husband_i_esr')->nullable();
            $table->text('husband_i_abo')->nullable();
            $table->text('husband_i_hiv')->nullable();
            $table->text('husband_i_blood_sugar')->nullable();
            $table->text('husband_i_hbsag')->nullable();
            $table->text('husband_i_urine')->nullable();
            $table->text('husband_i_hcv')->nullable();
            $table->text('husband_i_semen_culture')->nullable();
            $table->text('husband_i_vdrl')->nullable();
            $table->text('husband_i_sperm')->nullable();
            $table->text('wife_i_cbc')->nullable();
            $table->text('wife_i_hb')->nullable();
            $table->text('wife_i_td')->nullable();
            $table->text('wife_i_esr')->nullable();
            $table->text('wife_i_abo')->nullable();
            $table->text('wife_i_hiv')->nullable();
            $table->text('wife_i_blood_sugar')->nullable();
            $table->text('wife_i_hbsag')->nullable();
            $table->text('wife_i_urine')->nullable();
            $table->text('wife_i_hcv')->nullable();
            $table->text('wife_i_vdrl')->nullable();
            $table->date('wife_hea_date')->nullable();
            $table->text('wife_hea_toxoplasma_g')->nullable();
            $table->text('wife_hea_toxoplasma_m')->nullable();
            $table->text('wife_hea_rubella_g')->nullable();
            $table->text('wife_hea_rubella_m')->nullable();
            $table->text('wife_hea_cmv_g')->nullable();
            $table->text('wife_hea_cmv_m')->nullable();
            $table->text('wife_hea_herpes_g')->nullable();
            $table->text('wife_hea_herpes_m')->nullable();
            $table->text('wife_hea_aca_g')->nullable();
            $table->text('wife_hea_aca_m')->nullable();
            $table->text('wife_hea_apa_g')->nullable();
            $table->text('wife_hea_apa_m')->nullable();
            $table->text('wife_hea_ana_g')->nullable();
            $table->text('wife_hea_ana_m')->nullable();
            $table->text('wife_hea_la_g')->nullable();
            $table->text('wife_hea_la_m')->nullable();
            $table->text('sa_hrs_1')->nullable();
            $table->text('wife_ici_day_1')->nullable();
            $table->date('wife_ici_date_1')->nullable();
            $table->text('wife_ici_endo_1')->nullable();
            $table->text('wife_ici_rtov_1')->nullable();
            $table->text('wife_ici_ltov_1')->nullable();
            $table->text('wife_ici_remark_1')->nullable();
            $table->text('wife_ici_day_2')->nullable();
            $table->date('wife_ici_date_2')->nullable();
            $table->text('wife_ici_endo_2')->nullable();
            $table->text('wife_ici_rtov_2')->nullable();
            $table->text('wife_ici_ltov_2')->nullable();
            $table->text('wife_ici_remark_2')->nullable();
            $table->text('wife_ici_day_3')->nullable();
            $table->date('wife_ici_date_3')->nullable();
            $table->text('wife_ici_endo_3')->nullable();
            $table->text('wife_ici_rtov_3')->nullable();
            $table->text('wife_ici_ltov_3')->nullable();
            $table->text('wife_ici_remark_3')->nullable();
            $table->text('wife_ici_day_4')->nullable();
            $table->date('wife_ici_date_4')->nullable();
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
            $table->dropColumn('husband_pmh_mumps');
            $table->dropColumn('husband_pmh_kochs');
            $table->dropColumn('husband_pmh_diabetes');
            $table->dropColumn('husband_pmh_hypertension');
            $table->dropColumn('husband_pmh_previous_sergery');
            $table->dropColumn('husband_pmh_examination');
            $table->dropColumn('husband_pmh_stature');
            $table->dropColumn('husband_pmh_bp');
            $table->dropColumn('husband_pmh_sec_sex');
            $table->dropColumn('husband_pmh_genital_examination');
            $table->dropColumn('husband_testicular_biospy');
            $table->dropColumn('husband_other_investigationq');
            $table->dropColumn('husband_te_advised');
            $table->dropColumn('husband_i_cbc');
            $table->dropColumn('husband_i_hb');
            $table->dropColumn('husband_i_td');
            $table->dropColumn('husband_i_esr');
            $table->dropColumn('husband_i_abo');
            $table->dropColumn('husband_i_hiv');
            $table->dropColumn('husband_i_blood_sugar');
            $table->dropColumn('husband_i_hbsag');
            $table->dropColumn('husband_i_urine');
            $table->dropColumn('husband_i_hcv');
            $table->dropColumn('husband_i_semen_culture');
            $table->dropColumn('husband_i_vdrl');
            $table->dropColumn('husband_i_sperm');
            $table->dropColumn('wife_i_cbc');
            $table->dropColumn('wife_i_hb');
            $table->dropColumn('wife_i_td');
            $table->dropColumn('wife_i_esr');
            $table->dropColumn('wife_i_abo');
            $table->dropColumn('wife_i_hiv');
            $table->dropColumn('wife_i_blood_sugar');
            $table->dropColumn('wife_i_hbsag');
            $table->dropColumn('wife_i_urine');
            $table->dropColumn('wife_i_hcv');
            $table->dropColumn('wife_i_vdrl');
            $table->dropColumn('wife_hea_date');
            $table->dropColumn('wife_hea_toxoplasma_g');
            $table->dropColumn('wife_hea_toxoplasma_m');
            $table->dropColumn('wife_hea_rubella_g');
            $table->dropColumn('wife_hea_rubella_m');
            $table->dropColumn('wife_hea_cmv_g');
            $table->dropColumn('wife_hea_cmv_m');
            $table->dropColumn('wife_hea_herpes_g');
            $table->dropColumn('wife_hea_herpes_m');
            $table->dropColumn('wife_hea_aca_g');
            $table->dropColumn('wife_hea_aca_m');
            $table->dropColumn('wife_hea_apa_g');
            $table->dropColumn('wife_hea_apa_m');
            $table->dropColumn('wife_hea_ana_g');
            $table->dropColumn('wife_hea_ana_m');
            $table->dropColumn('wife_hea_la_g');
            $table->dropColumn('wife_hea_la_m');
            $table->dropColumn('sa_hrs_1');
            $table->dropColumn('wife_ici_day_1');
            $table->dropColumn('wife_ici_date_1');
            $table->dropColumn('wife_ici_endo_1');
            $table->dropColumn('wife_ici_rtov_1');
            $table->dropColumn('wife_ici_ltov_1');
            $table->dropColumn('wife_ici_remark_1');
            $table->dropColumn('wife_ici_day_2');
            $table->dropColumn('wife_ici_date_2');
            $table->dropColumn('wife_ici_endo_2');
            $table->dropColumn('wife_ici_rtov_2');
            $table->dropColumn('wife_ici_ltov_2');
            $table->dropColumn('wife_ici_remark_2');
            $table->dropColumn('wife_ici_day_3');
            $table->dropColumn('wife_ici_date_3');
            $table->dropColumn('wife_ici_endo_3');
            $table->dropColumn('wife_ici_rtov_3');
            $table->dropColumn('wife_ici_ltov_3');
            $table->dropColumn('wife_ici_remark_3');
            $table->dropColumn('wife_ici_day_4');
            $table->dropColumn('wife_ici_date_4');
        });
    }
}
