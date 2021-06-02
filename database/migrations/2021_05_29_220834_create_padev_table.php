<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePadevTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padev', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('nom');
            $table->string('prenoms');
            $table->string('pays');
            $table->string('telephone');
            $table->text('adresse');
            $table->string('email')->unique();
            $table->string('site')->nullable();
            $table->string('secteur');
            $table->string('nom_entreprise');
            $table->string('profession');
            $table->string('titre');
            $table->string('nbre_employe');
            $table->string('nbre_representation');
            $table->string('nbre_participant');
            $table->string('impact');
            $table->string('palmares');
            $table->string('statut');
            $table->softDeletes();
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
        Schema::dropIfExists('padev');
    }
}
