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
        Schema::create('pets', function (Blueprint $table) {
            
            $table->id();
            $table->timestamps();
            $table->string('cpf_tutor',11);
            $table->foreign('cpf_tutor')->references('cpf')->on('tutors');
            $table->string('nome',100);
            $table->string('tipo',40);
            $table->string('data',8);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
};
