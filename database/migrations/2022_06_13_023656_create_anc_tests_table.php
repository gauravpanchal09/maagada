<?php

use App\Models\AncTest;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAncTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anc_tests', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('patient_id')->unsigned();
            $table->date('menstrual_history_lmp')->nullable();
            $table->date('menstrual_history_edd')->nullable();
            $table->string('obstetric_history_g')->nullable();
            $table->string('obstetric_history_p')->nullable();
            $table->string('obstetric_history_a')->nullable();
            $table->string('obstetric_history_l')->nullable();
            $table->string('obstetric_history_first')->nullable();
            $table->string('obstetric_history_second')->nullable();
            $table->string('obstetric_history_third')->nullable();
            $table->string('marital_life')->nullable();
            $table->enum('infertility_treatment', [AncTest::INFERTILITY_STATUS_ACTIVE, AncTest::INFERTILITY_STATUS_INACTIVE]);
            $table->string('previous_surgeries')->nullable();
            $table->string('past_history')->nullable();
            $table->string('family_history')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('hb')->nullable();
            $table->string('platelets')->nullable();
            $table->string('hiv')->nullable();
            $table->string('hbsag')->nullable();
            $table->string('udrl')->nullable();
            $table->string('urine_randm')->nullable();
            $table->string('tsh')->nullable();
            $table->string('bl_suger')->nullable();
            $table->string('ogtt')->nullable();
            $table->string('hb_electro')->nullable();
            $table->string('dual_markar')->nullable();
            $table->string('quadraple_markar')->nullable();
            $table->bigInteger('general_examination_height')->nullable();
            $table->bigInteger('general_examination_weight')->nullable();
            $table->string('general_examination_pallor')->nullable();
            $table->string('general_examination_heart')->nullable();
            $table->string('general_examination_lungs')->nullable();
            $table->string('general_examination_varicoseveios')->nullable();
            $table->string('general_examination_breasts')->nullable();
            $table->string('vaccination')->nullable();
            $table->timestamps();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anc_tests');
    }
}
