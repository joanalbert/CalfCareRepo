<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricTractamentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historic_tractament', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('ID_Animal')->unsigned();
            $table->date('Data_Inici');
            $table->date('Data_Fi');
            $table->string('medicina', 200);
            $table->integer('Quantitat');
            
            $table->foreign("ID_Animal")->references('ID')->on('animal')
                    ->onUpdate("NO ACTION")
                    ->onDelete("NO ACTION");
            
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
        Schema::dropIfExists('historic_tractament');
    }
}
