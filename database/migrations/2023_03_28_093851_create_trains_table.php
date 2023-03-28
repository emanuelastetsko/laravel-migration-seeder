<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {

            $table->id();


            // Azienda                                 TIPO: stringa
            $table->string("company", 50);

            // Stazione di partenza                    TIPO: stringa
            $table->string("departure_station", 100);

            // Stazione di arrivo                      TIPO: stringa
            $table->string("arrival_station", 100);

            // Orario di partenza                      TIPO: datetime, timestamp
            $table->dateTime("departure_time", 3);

            // Orario di arrivo                        TIPO: datetime, timestamp
            $table->dateTime("arrival_time", 3);

            // Codice Treno                            TIPO: stringa
            $table->string("train_code", 12);

            // Numero Carrozze                         TIPO: unsigned tinyint
            $table->tinyInteger("carriages_number")->unsigned();

            // In orario                               TIPO: booleano -> tinyint (in automatico)
            $table->boolean("on_time")->default(true);
        
            // Cancellato                              TIPO: booleano 
            $table->boolean("canceled")->default(false);


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
        Schema::dropIfExists('trains');
    }
};
