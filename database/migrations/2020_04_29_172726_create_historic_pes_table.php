<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricPesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historic_pes', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('ID_Animal')->unsigned();
            $table->float('Pes');
            $table->date('Data');
            $table->timestamps();
            
            $table->foreign('ID_Animal')->references('ID')
                    ->on('animal')
                    ->onDelete('NO ACTION')
                    ->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historic_pes');
    }
}
