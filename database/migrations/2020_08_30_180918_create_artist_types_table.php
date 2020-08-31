<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('artist_types', function (Blueprint $table) {
            $table->id();
            $table->foreignId('artist_id');
            $table->foreignId('type_id');

            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('restrict')->onUpdate('cascade');

            $table->foreign('type_id')->references('id')->on('types')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artist_types');
    }
}
