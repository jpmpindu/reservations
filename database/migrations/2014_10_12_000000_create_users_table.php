<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('login')->length(30);
            $table->string('password')->length(255);
            $table->foreignId('role_id');
            $table->string('firstname')->length(60);
            $table->string('lastname')->length(60);
            $table->string('email')->length(100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('langue',2)->default('EN');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('roles')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
