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
        Schema::create('alinmis', function (Blueprint $table) {
            $table->id();
            $table->string('mikdar')->nullable();
            $table->string('user')->nullable();
            $table->string('tarla')->nullable();
            $table->string('onaylian')->nullable();
            $table->string('odemeID')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alinmis');
    }
};
