<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('authorized_sub_module_id');
            $table->char('permission', 1);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('authorized_sub_module_id')->references('id')->on('authorized_sub_modules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permissions', function (Blueprint $table) {
            $table->dropForeign(['authorized_sub_module_id']);
            $table->drop('permissions');
        });
    }
}
