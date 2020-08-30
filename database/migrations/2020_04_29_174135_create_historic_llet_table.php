<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricLletTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historic_llet', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('ID_Llet')->unsigned();
            $table->integer('ID_Animal')->unsigned();
            $table->float('Litres');
            $table->date('Data');
            
            
            $table->foreign('ID_Llet')->references('ID')
                    ->on('llet')
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
        Schema::dropIfExists('historic_llet');
    }
}
