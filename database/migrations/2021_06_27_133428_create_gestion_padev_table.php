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
            $table->longText("couverture")->comment("photo de couverture");
            $table->string('titre');
            $table->string("lieu");
            $table->date("debut");
            $table->date("fin");
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
        Schema::dropIfExists('gestion_padev');
    }
}
