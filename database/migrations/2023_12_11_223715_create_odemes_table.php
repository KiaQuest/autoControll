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
            $table->string('OdeyenTel')->nullable();
            $table->string('VadeTarihi')->nullable();
            $table->string('OdemeSekli')->nullable();
            $table->string('Tutar')->nullable();
            $table->string('Tarla')->nullable();
            $table->string('Yetkili')->nullable();
            $table->string('OdemeAciklama')->nullable();
            $table->string('About')->nullable();
            $table->string('kim')->nullable();
            $table->string('yapan')->nullable();
            $table->string('tarlaID')->nullable();
            $table->string('parselsayisi')->nullable();
            $table->string('parselfiyati')->nullable();
            $table->string('kapora')->nullable();
            $table->string('kalan')->nullable();
            $table->integer('vade')->default(0);
            $table->string('onay')->default(0);
            $table->string('onaylian')->nullable();
            $table->string('delete')->default(0);
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
