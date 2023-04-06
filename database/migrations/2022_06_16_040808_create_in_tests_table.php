<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_tests', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('patient_id')->unsigned();
            $table->text('p_married_year')->nullable();
            $table->text('p_ttc')->nullable();
            $table->text('p_ttc_year')->nullable();
            $table->text('p_toi')->nullable();
            $table->text('pc_method')->nullable();
            $table->text('pc_duration_year')->nullable();
            $table->text('mh_menarchat')->nullable();
            $table->text('mh_year')->nullable();
            $table->date('mh_previous_cycle')->nullable();
            $table->date('mh_present_cycle')->nullable();
            $table->text('mh_lmp')->nullable();
            $table->text('oh_delivery')->nullable();
            $table->text('oh_miscarriage')->nullable();
            $table->text('oh_pgti')->nullable();
            $table->text('oh_pa')->nullable();
            $table->text('pmh_thyroid')->nullable();
            $table->text('pmh_tuberculosis')->nullable();
            $table->text('pmh_hypertension')->nullable();
            $table->text('pmh_diabetes')->nullable();
            $table->text('pmh_other')->nullable();
            $table->text('sfh_wife')->nullable();
            $table->text('sfh_husband')->nullable();
            $table->text('eve_stature')->nullable();
            $table->text('eve_pulse')->nullable();
            $table->text('eve_height')->nullable();
            $table->text('eve_weight')->nullable();
            $table->text('eve_bp')->nullable();
            $table->text('eve_bmi')->nullable();
            $table->text('eve_anaemia')->nullable();
            $table->text('eve_hyriod')->nullable();
            $table->text('eve_hirsutism')->nullable();
            $table->text('eve_face')->nullable();
            $table->text('eve_breast')->nullable();
            $table->text('eve_other')->nullable();
            $table->text('eve_cvs')->nullable();
            $table->text('eve_rs')->nullable();
            $table->text('eve_sec_sex_character')->nullable();
            $table->text('eve_breast2')->nullable();
            $table->text('eve_public_hair')->nullable();
            $table->text('eve_axillary_hairs')->nullable();
            $table->text('ea_stature')->nullable();
            $table->text('ep_ps')->nullable();
            $table->text('ep_vulva')->nullable();
            $table->text('ep_pv')->nullable();
            $table->text('ep_veg')->nullable();
            $table->text('tr_year')->nullable();
            $table->date('husband_dob')->nullable();
            $table->text('husband_occupation')->nullable();
            $table->date('husband_married_previously')->nullable();
            $table->text('husband_age')->nullable();
            $table->text('husband_children')->nullable();
            $table->text('husband_coitus_frequency')->nullable();
            $table->text('husband_exection')->nullable();
            $table->text('husband_ejaculation')->nullable();
            $table->date('husband_orgasm')->nullable();
            $table->text('husband_drugs')->nullable();
            $table->text('husband_smoking')->nullable();
            $table->text('husband_alcohol')->nullable();
            $table->text('husband_semon_analysic')->nullable();
            $table->text('inv_hysteroscopy')->nullable();
            $table->text('inv_laparoscopy')->nullable();
            $table->text('inv_image')->nullable();
            $table->text('inv_pcr_for_tb')->nullable();
            $table->text('inv_hysterosalpingography')->nullable();
            $table->date('he_anh_date')->nullable();
            $table->text('he_anh_day_of_cycle')->nullable();
            $table->text('he_anh_result')->nullable();
            $table->text('he_anh_normal_range')->nullable();
            $table->date('he_prolaction_date')->nullable();
            $table->text('he_prolaction_day_of_cycle')->nullable();
            $table->text('he_prolaction_result')->nullable();
            $table->text('he_prolaction_normal_range')->nullable();
            $table->date('he_lh_date')->nullable();
            $table->text('he_lh_day_of_cycle')->nullable();
            $table->text('he_lh_result')->nullable();
            $table->text('he_lh_normal_range')->nullable();
            $table->date('he_fsh_date')->nullable();
            $table->text('he_fsh_day_of_cycle')->nullable();
            $table->text('he_fsh_result')->nullable();
            $table->text('he_fsh_normal_range')->nullable();
            $table->date('he_testosterone_date')->nullable();
            $table->text('he_testosterone_day_of_cycle')->nullable();
            $table->text('he_testosterone_result')->nullable();
            $table->text('he_testosterone_normal_range')->nullable();
            $table->date('he_oestrogen_date')->nullable();
            $table->text('he_oestrogen_day_of_cycle')->nullable();
            $table->text('he_oestrogen_result')->nullable();
            $table->text('he_oestrogen_normal_range')->nullable();
            $table->date('he_progesterone_date')->nullable();
            $table->text('he_progesterone_day_of_cycle')->nullable();
            $table->text('he_progesterone_result')->nullable();
            $table->text('he_progesterone_normal_range')->nullable();
            $table->date('he_dheas_date')->nullable();
            $table->text('he_dheas_day_of_cycle')->nullable();
            $table->text('he_dheas_result')->nullable();
            $table->text('he_dheas_normal_range')->nullable();
            $table->date('he_cortisol_date')->nullable();
            $table->text('he_cortisol_day_of_cycle')->nullable();
            $table->text('he_cortisol_result')->nullable();
            $table->text('he_cortisol_normal_range')->nullable();
            $table->date('he_t3_date')->nullable();
            $table->text('he_t3_day_of_cycle')->nullable();
            $table->text('he_t3_result')->nullable();
            $table->text('he_t3_normal_range')->nullable();
            $table->date('he_t4_date')->nullable();
            $table->text('he_t4_day_of_cycle')->nullable();
            $table->text('he_t4_result')->nullable();
            $table->text('he_t4_normal_range')->nullable();
            $table->date('he_tsh_date')->nullable();
            $table->text('he_tsh_day_of_cycle')->nullable();
            $table->text('he_tsh_result')->nullable();
            $table->text('he_tsh_normal_range')->nullable();
            $table->text('oi_plan')->nullable();
            $table->text('oi_iui')->nullable();
            $table->text('oi_iuf')->nullable();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
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
        Schema::dropIfExists('in_tests');
    }
}
