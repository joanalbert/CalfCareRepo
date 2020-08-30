<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinsoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinso', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Nom', 50);
            $table->string('Observacions', 300);
            $table->float('Preu_Unitat');
            $table->string('Caracteristiques', 300);
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
        Schema::dropIfExists('pinso');
    }
}
