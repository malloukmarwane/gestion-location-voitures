<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('voitures', function (Blueprint $table) {
        $table->id();
        $table->string('marque');
        $table->string('modele');
        $table->string('plaque_immatriculation')->unique();
        $table->decimal('tarif_location', 8, 2);
        $table->boolean('disponible')->default(true);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voitures');
    }
};
