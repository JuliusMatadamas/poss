<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColoniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colonies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('zip_code_id');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('zip_code_id')->references('id')->on('zip_codes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('colonies', function (Blueprint $table) {
            $table->dropForeign(['zip_code_id']);
            $table->drop('colonies');
        });
    }
}
