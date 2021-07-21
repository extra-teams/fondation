<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGestionPadevTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestion_padev', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('libelle');
            $table->text('description');
            $table->date("debut");
            $table->date("fin");
            $table->longText('images')->nullable();
            $table->boolean("ouvert")->default(0);
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
        Schema::dropIfExists('gestion_padev');
    }
}
