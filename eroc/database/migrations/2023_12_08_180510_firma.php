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
        Schema::create('firmas', function (Blueprint $table) {
            $table->id();
            $table->string('firma');
            $table->string('telefon')->nullable();
            $table->string('eposta')->nullable();
            $table->string('vnum')->nullable();
            $table->string('adres');
            $table->string('notlar')->nullable();
            $table->string('yetkiliad')->nullable();
            $table->string('yetkilisoyad')->nullable();
            $table->text('about')->nullable();
            $table->boolean('durum')->nullable();
            $table->integer('kim');
            $table->integer('yapan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('firmas');
    }
};
