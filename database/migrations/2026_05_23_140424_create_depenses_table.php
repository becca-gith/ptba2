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
        Schema::create('depenses', function (Blueprint $table) {
            $table->id();
            $table->string('motif')->nullable();
            $table->decimal('montant', 15, 2)->nullable();
            $table->date('date_depense')->nullable();
            $table->bigInteger('annee_id')->nullable();
            $table->bigInteger('ligne_id')->nullable();
            $table->string('piece_justificatif')->nullable();
            $table->bigInteger('user_id')->nullable();

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
        Schema::dropIfExists('depenses');
    }
};
