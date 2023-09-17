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
        Schema::create('dados_sensores', function (Blueprint $table) {
            $table->id('idPayload');
            $table->dateTime('Data', 0);
            $table->float("Pressao", 10, 2);
            $table->float("Temperatura", 10, 2);
            $table->float("Umidade", 10, 2);
            $table->string("Acelerometro", 50);
            $table->float("CO2", 10, 2);
            $table->string("GPS", 30);
            $table->string("Giroscospio", 50);
            $table->float("Bateria", 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dados_sensores');
    }
};
