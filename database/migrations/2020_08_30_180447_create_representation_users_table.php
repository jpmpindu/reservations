<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepresentationUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representation_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('places');
            $table->unsignedBigInteger('representation_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('representation_id')->references('id')->on('representations')->onDelete('restrict')->onUpdate('cascade');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('representation_users');
    }
}
