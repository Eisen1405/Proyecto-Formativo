<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RolUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol_user', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrainer();
        $table->foreignId('rol_id')->constrainer();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('rol_user', function (Blueprint $table) {
            $table->dropForeignId('rol_user_user_id_foreign');
            $table->dropForeignId('rol_user_rol_id_foreign');
        });
        Schema::dropIfExist('rol_user');

    }
}
