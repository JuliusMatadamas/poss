<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('short_name');
            $table->string('rfc')->nullable();
            $table->unsignedBigInteger('colony_id');
            $table->unsignedBigInteger('company_id');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('colony_id')->references('id')->on('colonies');
            $table->foreign('company_id')->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->dropForeign(['colony_id']);
            $table->dropForeign(['company_id']);
            $table->drop('clients');
        });
    }
}
