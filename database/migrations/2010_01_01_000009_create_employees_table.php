<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('second_name');
            $table->string('third_name');
            $table->date('birth_date');
            $table->enum('genre', ['f', 'm']);
            $table->unsignedBigInteger('colony_id');
            $table->text('address');
            $table->string('phone', 10);
            $table->string('personal_email');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('colony_id')->references('id')->on('colonies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropForeign(['colony_id']);
            $table->drop('employees');
        });
    }
}
