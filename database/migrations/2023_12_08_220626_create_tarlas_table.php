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
        Schema::create('tarlas', function (Blueprint $table) {
            $table->id();
            $table->string('konum_il')->nullable();
            $table->string('konum_ilce')->nullable();
            $table->string('konum_mahalle')->nullable();
            $table->string('Ada')->nullable();
            $table->string('Parsel')->nullable();
            $table->string('MetreKare')->nullable();
            $table->string('ParselSayisi')->nullable();
            $table->string('SatisDurumu')->nullable();
            $table->string('SahipAd')->nullable();
            $table->string('SahipSoyad')->nullable();
            $table->string('SahipTc')->nullable();
            $table->string('SahipTel')->nullable();
            $table->integer('kim');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarlas');
    }
};
