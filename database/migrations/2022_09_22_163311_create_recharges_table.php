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
        Schema::create('recharges', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_utilisateur');
            $table->foreign("id_utilisateur")->references("id")->on("utilisateurs");

            $table->unsignedBigInteger('id_forfait');
            $table->foreign("id_forfait")->references("id")->on("forfaits");
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
        Schema::dropIfExists('recharges');
    }
};
