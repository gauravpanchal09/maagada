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
            $table->text('sa_volume_native')->nullable();
            $table->text('sa_volume_ah')->nullable();
            $table->text('sa_mucoid_native')->nullable();
            $table->text('sa_mucoid_ah')->nullable();
            $table->text('sa_sperm_count_native')->nullable();
            $table->text('sa_sperm_count_ah')->nullable();
            $table->text('sa_motility_native')->nullable();
            $table->text('sa_motility_ah')->nullable();
            $table->text('sa_grade_native')->nullable();
            $table->text('sa_grade_ah')->nullable();
            $table->text('sa_pus_cells_native')->nullable();
            $table->text('sa_pus_cells_ah')->nullable();
            $table->text('sa_immature_cells_native')->nullable();
            $table->text('sa_immature_cells_ah')->nullable();
            $table->text('sa_agglutination_native')->nullable();
            $table->text('sa_agglutination_ah')->nullable();
            $table->text('sa_granular_debris_native')->nullable();
            $table->text('sa_granular_debris_ah')->nullable();
            $table->text('sa_insemination_time_native')->nullable();
            $table->text('sa_insemination_time_ah')->nullable();
            $table->text('sa_hrs_1')->nullable();
            $table->text('sa_posti_1')->nullable();
            $table->text('sa_no2pn_1')->nullable();
            $table->text('sa_2pn_1')->nullable();
            $table->text('sa_max2pn_1')->nullable();
            $table->text('sa_hrs_2')->nullable();
            $table->text('sa_posti_2')->nullable();
            $table->text('sa_no2pn_2')->nullable();
            $table->text('sa_2pn_2')->nullable();
            $table->text('sa_max2pn_2')->nullable();
            $table->text('sa_used_no_8')->nullable();
            $table->text('sa_used_grade_8')->nullable();
            $table->text('sa_frozen_no_8')->nullable();
            $table->text('sa_frozen_grade_8')->nullable();
            $table->text('sa_m3_no_8')->nullable();
            $table->text('sa_m3_grade_8')->nullable();
            $table->text('sa_used_no_4')->nullable();
            $table->text('sa_used_grade_4')->nullable();
            $table->text('sa_frozen_no_4')->nullable();
            $table->text('sa_frozen_grade_4')->nullable();
            $table->text('sa_m3_no_4')->nullable();
            $table->text('sa_m3_grade_4')->nullable();
            $table->text('sa_used_no_2')->nullable();
            $table->text('sa_used_grade_2')->nullable();
            $table->text('sa_frozen_no_2')->nullable();
            $table->text('sa_frozen_grade_2')->nullable();
            $table->text('sa_m3_no_2')->nullable();
            $table->text('sa_m3_grade_2')->nullable();
            $table->text('sa_used_no_2pn')->nullable();
            $table->text('sa_used_grade_2pn')->nullable();
            $table->text('sa_frozen_no_2pn')->nullable();
            $table->text('sa_frozen_grade_2pn')->nullable();
            $table->text('sa_m3_no_2pn')->nullable();
            $table->text('sa_m3_grade_2pn')->nullable();
            $table->text('sa_used_no_total')->nullable();
            $table->text('sa_used_grade_total')->nullable();
            $table->text('sa_frozen_no_total')->nullable();
            $table->text('sa_frozen_grade_total')->nullable();
            $table->text('sa_m3_no_total')->nullable();
            $table->text('sa_m3_grade_total')->nullable();
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
            $table->dropColumn('sa_volume_native');
            $table->dropColumn('sa_volume_ah');
            $table->dropColumn('sa_mucoid_native');
            $table->dropColumn('sa_mucoid_ah');
            $table->dropColumn('sa_sperm_count_native');
            $table->dropColumn('sa_sperm_count_ah');
            $table->dropColumn('sa_motility_native');
            $table->dropColumn('sa_motility_ah');
            $table->dropColumn('sa_grade_native');
            $table->dropColumn('sa_grade_ah');
            $table->dropColumn('sa_pus_cells_native');
            $table->dropColumn('sa_pus_cells_ah');
            $table->dropColumn('sa_immature_cells_native');
            $table->dropColumn('sa_immature_cells_ah');
            $table->dropColumn('sa_agglutination_native');
            $table->dropColumn('sa_agglutination_ah');
            $table->dropColumn('sa_granular_debris_native');
            $table->dropColumn('sa_granular_debris_ah');
            $table->dropColumn('sa_insemination_time_native');
            $table->dropColumn('sa_insemination_time_ah');
            $table->dropColumn('sa_hrs_1');
            $table->dropColumn('sa_posti_1');
            $table->dropColumn('sa_no2pn_1');
            $table->dropColumn('sa_2pn_1');
            $table->dropColumn('sa_max2pn_1');
            $table->dropColumn('sa_hrs_2');
            $table->dropColumn('sa_posti_2');
            $table->dropColumn('sa_no2pn_2');
            $table->dropColumn('sa_2pn_2');
            $table->dropColumn('sa_max2pn_2');
            $table->dropColumn('sa_used_no_8');
            $table->dropColumn('sa_used_grade_8');
            $table->dropColumn('sa_frozen_no_8');
            $table->dropColumn('sa_frozen_grade_8');
            $table->dropColumn('sa_m3_no_8');
            $table->dropColumn('sa_m3_grade_8');
            $table->dropColumn('sa_used_no_4');
            $table->dropColumn('sa_used_grade_4');
            $table->dropColumn('sa_frozen_no_4');
            $table->dropColumn('sa_frozen_grade_4');
            $table->dropColumn('sa_m3_no_4');
            $table->dropColumn('sa_m3_grade_4');
            $table->dropColumn('sa_used_no_2');
            $table->dropColumn('sa_used_grade_2');
            $table->dropColumn('sa_frozen_no_2');
            $table->dropColumn('sa_frozen_grade_2');
            $table->dropColumn('sa_m3_no_2');
            $table->dropColumn('sa_m3_grade_2');
            $table->dropColumn('sa_used_no_2pn');
            $table->dropColumn('sa_used_grade_2pn');
            $table->dropColumn('sa_frozen_no_2pn');
            $table->dropColumn('sa_frozen_grade_2pn');
            $table->dropColumn('sa_m3_no_2pn');
            $table->dropColumn('sa_m3_grade_2pn');
            $table->dropColumn('sa_used_no_total');
            $table->dropColumn('sa_used_grade_total');
            $table->dropColumn('sa_frozen_no_total');
            $table->dropColumn('sa_frozen_grade_total');
            $table->dropColumn('sa_m3_no_total');
            $table->dropColumn('sa_m3_grade_total');
        });
    }
}
