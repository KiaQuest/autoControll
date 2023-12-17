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
        Schema::create('odemes', function (Blueprint $table) {
            $table->id();
            $table->string('OdemeTipi')->nullable();
            $table->string('OdeyenAd')->nullable();
            $table->string('OdeyenSoyad')->nullable();
            $table->string('OdeyenTc')->nullable();
            $table->string('VadeTarihi')->nullable();
            $table->string('OdemeSekli')->nullable();
            $table->string('Tutar')->nullable();
            $table->string('Tarla')->nullable();
            $table->string('Yetkili')->nullable();
            $table->string('OdemeAciklama')->nullable();
            $table->string('About')->nullable();
            $table->string('kim')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('odemes');
    }
};
