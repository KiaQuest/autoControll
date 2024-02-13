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
        Schema::create('is', function (Blueprint $table) {
            $table->id();
            $table->string('YapilacakIs')->nullable();
            $table->date('IsBaslangicTarihi')->nullable();
            $table->date('IsBitisTarihi')->nullable();
            $table->string('Tarla')->nullable();
            $table->string('kim')->nullable();
            $table->string('yapan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('is');
    }
};
