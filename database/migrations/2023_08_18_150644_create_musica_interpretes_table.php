<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musica_interpretes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('musica_id');
            $table->unsignedBigInteger('interprete_id');
            $table->timestamps();

            $table->foreign('musica_id')->references('id')->on('musicas')->onDelete('cascade');
            $table->foreign('interprete_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('musica_interpretes');
    }
};
