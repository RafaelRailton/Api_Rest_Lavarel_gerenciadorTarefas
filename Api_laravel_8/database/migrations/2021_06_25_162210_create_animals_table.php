<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable();
            $table->integer('idade')->nullable();
            $table->string('foto')->nullable();
            $table->string('estado')->nullable();
            $table->string('informacoes_extra')->nullable();
            $table->string('cidade')->nullable();
            $table->string('status')->nullable();
            $table->integer('user_id')->nullable();
            $table->json('user_encontrou')->nullable();
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
        Schema::dropIfExists('animals');
    }
}
