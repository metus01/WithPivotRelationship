<?php

use App\Models\Ingredient;
use App\Models\Recette;
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
        Schema::create('recette_ingredient', function (Blueprint $table) {
           $table->foreignIdFor(Recette::class);
           $table->foreignIdFor(Ingredient::class);
           $table->string('quantity');
           $table->primary(['recette_id' , 'ingredient_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recette_ingredient');
    }
};
