<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            // Azienda
            $table->string('company');
            // Stazione di partenza
            $table->string('departure_station');
            // Stazione di arrivo
            $table->string('arrival_station');
            // Orario di partenza
            $table->dateTime('departure');
            // Orario di arrivo
            $table->dateTime('arrival');
            // Codice Treno
            $table->string('code', 6);
            // Numero Carrozze
            $table->tinyInteger('carriages_number');
            // In orario
            $table->boolean('is_on_time');
            // Cancellato
            $table->boolean('is_cancelled');

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
