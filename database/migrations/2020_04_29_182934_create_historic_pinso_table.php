<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricPinsoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historic_pinso', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('ID_Pinso')->unsigned();
            $table->integer('ID_Animal')->unsigned();
            $table->float('KG_Pinso_Posat');
            $table->float('KG_Pinso_Llensat');
            $table->date('Data');
            
            $table->foreign('ID_Pinso')->references('ID')
                    ->on('pinso')
                    ->onUpdate('NO ACTION')
                    ->onDelete('NO ACTION');
            
            $table->foreign('ID_Animal')->references('ID')
                    ->on('animal')
                    ->onUpdate('NO ACTION')
                    ->onDelete('NO ACTION');
            
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
        Schema::dropIfExists('historic_pinso');
    }
}
