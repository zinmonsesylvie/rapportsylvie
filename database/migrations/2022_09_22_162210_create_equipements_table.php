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
        Schema::create('equipements', function (Blueprint $table) {
            $table->id();
            $table->string('nom_equipement');

            $table->unsignedBigInteger('id_utilisateur');
            $table->foreign("id_utilisateur")->references("id")->on("utilisateurs");

            $table->unsignedBigInteger('id_vehicule');
            $table->foreign("id_vehicule")->references("id")->on("vehicules");
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
        Schema::dropIfExists('equipements');
    }
};
