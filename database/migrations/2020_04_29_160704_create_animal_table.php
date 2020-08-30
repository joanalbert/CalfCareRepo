<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal', function (Blueprint $table) {
            $table->increments('ID');
            
            $table->integer('ID_GRANJA')->unsigned();
            $table->foreign('ID_GRANJA')->references('ID')->on('granja')->onDelete('NO ACTION')->onUpdate('NO ACTION');
              
            $table->bigInteger('N_Explotacio')->unique();
            $table->string('N_DARP', 200)->unique();
            $table->date('Data_Naixement');
            $table->date('Data_Mort')->nullable();
            $table->date('Data_Deslletament');
            $table->date('Data_Cremada_Banyes');
            $table->string('Metode_Cremada', 200);
            $table->float('Contorn_Centimetres');
            $table->float('Litres_Calostra');
            $table->integer('Preses_Calostra');
            $table->enum('sexe', ['M', 'F']);
            $table->float("Pes_Actual");
            //$table->integer('Perimetre_Torax');
            $table->string("Ruta_Imatge", 100)->nullable();
                    
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
        Schema::dropIfExists('animal');
    }
}
