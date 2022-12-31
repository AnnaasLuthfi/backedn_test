<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_list', function (Blueprint $table) {
            $table->increments('fl_id')->nullable(false)->change();
            $table->integer('cst_id')->nullable(false)->change();
            $table->string('fl_relation',50)->nullable(false)->change();
            $table->string('fl_name',50)->nullable(false)->change();
            $table->string('fl_dob',50)->nullable(false)->change();
            $table->timestamps();

            $table->foreign('cst_id')->references('cst_id')->on('customer')->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('family_list');
    }
}
