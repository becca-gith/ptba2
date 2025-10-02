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
        Schema::create('decaissements', function (Blueprint $table) {
            $table->id();

             $table->string('libelle')->nullable();
             $table->string ('fichier_justificatif')->nullable();
             $table->text ('motif')->nullable();
             $table->date('date_decaissement')->nullable();
             $table->float('montant')->nullable();

             $table->bigInteger('utilisateur_id')->nullable();
             $table->bigInteger('ptba_id')->nullable();
             $table->bigInteger('composant_id')->nullable();
             $table->bigInteger('activite_id')->nullable();

            $table->integer('etat')->default(1);
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
        Schema::dropIfExists('decaissements');
    }
};
