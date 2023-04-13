<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateInTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('in_tests', function (Blueprint $table) {
            $table->dropColumn('inv_image');
            $table->dropColumn('oi_plan');
            $table->dropColumn('oi_iui');
            $table->dropColumn('oi_iuf');
            $table->json('inv_images')->nullable();
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
            $table->dropColumn('inv_images');
            $table->text('inv_image')->nullable();
            $table->text('oi_plan')->nullable();
            $table->text('oi_iui')->nullable();
            $table->text('oi_iuf')->nullable();
        });
    }
}
