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
        Schema::create('arabas', function (Blueprint $table) {
            $table->id();
            $table->string('marka')->nullable();
            $table->string('model')->nullable();
            $table->string('km')->nullable();
            $table->string('fiyat')->nullable();
            $table->string('about')->nullable();
            $table->string('yapan')->nullable();
            $table->string('cid')->nullable();
            $table->string('oid')->nullable();
            $table->string('durum')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arabas');
    }
};
