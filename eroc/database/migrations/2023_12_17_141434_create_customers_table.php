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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('ad')->nullable();
            $table->string('soyad')->nullable();
            $table->string('tel')->nullable();
            $table->string('adres')->nullable();
            $table->string('mail')->nullable();
            $table->string('about')->nullable();
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
        Schema::dropIfExists('customers');
    }
};