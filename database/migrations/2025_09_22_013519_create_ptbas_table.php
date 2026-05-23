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
        Schema::create('ptbas', function (Blueprint $table) {
            $table->id();


            $table->bigInteger('annee_id')->nullable();
            $table->bigInteger('projet_id')->nullable();
            $table->decimal('cout', 15, 2)->nullable(); // <-- correction ici
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
        Schema::dropIfExists('ptbas');
    }
};
