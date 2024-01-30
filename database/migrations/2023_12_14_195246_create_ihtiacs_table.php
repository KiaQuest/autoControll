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
        Schema::create('ihtiacs', function (Blueprint $table) {
            $table->id();
            $table->string('about')->nullable();
            $table->string('firma')->nullable();
            $table->string('kim')->nullable();
            $table->string('yapan')->nullable();
            $table->string('alacak')->nullable();
            $table->string('verecek')->nullable();
            $table->string('kalan')->nullable();
            $table->string('durum')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ihtiacs');
    }
};
