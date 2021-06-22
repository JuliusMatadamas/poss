<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('plan_id');
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('role_id');
            $table->double('salary', 8, 2);
            $table->date('date_begin');
            $table->date('date_end')->nullable();
            $table->timestamps();

            $table->foreign('plan_id')->references('id')->on('plans');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contracts', function (Blueprint $table) {
            $table->dropForeign(['plan_id']);
            $table->dropForeign(['employee_id']);
            $table->dropForeign(['role_id']);
            $table->drop('contracts');
        });
    }
}
