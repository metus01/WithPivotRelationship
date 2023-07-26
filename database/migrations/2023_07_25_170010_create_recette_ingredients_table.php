<?php

use App\Models\Recette;
use App\Models\Ingredient;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
            Schema::create('pivot.recette_ingredients', function (Blueprint $table) {
                $table->id();
                $table->foreignIdFor(Recette::class);
                $table->foreignIdFor(Ingredient::class);
                $table->string('quantity');
                $table->timestamps();
             });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pivot.recette_ingredients');
    }
};
