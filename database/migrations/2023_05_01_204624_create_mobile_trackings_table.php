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
        Schema::create('mobile_trackings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('NDOS');
            $table->string('TypeTransaction');
            $table->string('Client');
            $table->string('Ville');
            $table->string('DestinationFinal');
            $table->string('Destinataire');
            $table->integer('Nb_Colis');
            $table->string('Port');
            $table->bigInteger('Poids');
            $table->string('ModePay');
            $table->bigInteger('Montant');
            $table->decimal('PrixHt');
            $table->string('DateSaisie');
            $table->string('Status');
            $table->string('DateCloture');
            $table->string('DateDepart');
            $table->string('Depart');
            $table->string('Destination');
            $table->string('DateRecption');
            $table->string('IsTranseted');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobile_trackings');
    }
};
