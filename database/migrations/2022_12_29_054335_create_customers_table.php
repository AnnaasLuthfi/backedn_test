<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id()->nullable(false)->change();
            $table->integer('nationallity_id')->nullable(false)->change();
            $table->char('cst_name',50)->nullable(false)->change();
            $table->date('cst_dob')->nullable(false)->change();
            $table->string('cst_phoneNum',50)->nullable(false)->change();
            $table->string('cst_email',50)->nullable(false)->change();
            $table->timestamps();

            $table->foreign('nationallity_id')->references('id')->on('nationallity')->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
