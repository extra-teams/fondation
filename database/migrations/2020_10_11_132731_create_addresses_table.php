<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->unsignedBigInteger('id_client');
            $table->string('code_pays')->comment('code du pays');
            $table->string('code_ville')->comment('code de la ville');
            $table->string('region')->comment('region ou departement');
            $table->string('rue')->nullable()->comment('numero de la rue');
            $table->string('code_bp')->comment('code postale');
            $table->longText('description')->nullable()->comment('info complementaire');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_client')
                ->references('id')->on('clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
