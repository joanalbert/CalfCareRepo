<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGranjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('granja', function (Blueprint $table) {
            $table->increments('ID');
            $table->string("NomExplotacio", 200);
            $table->string("Usuari", 200)->unique();
            $table->string("Password", 200);
            $table->string("email", 300)->unique();
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
        Schema::dropIfExists('granja');
    }
}
