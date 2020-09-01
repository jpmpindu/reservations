<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('shows', function (Blueprint $table){
            $table->id();
            $table->string('slug')->length(60);
            $table->string('title')->length(255);
            $table->string('poster_url')->length(255);
            $table->text('description');
            $table->tinyInteger('bookable')->length(1);
            $table->decimal('price',10,2);
            $table->foreignId('location_id')->index();
            $table->foreignId('show_id');
            
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('show_id')->references('id')->on('shows')
                    ->onDelete('restrict')->onUpdate('cascade');

          

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shows');
    }
}
