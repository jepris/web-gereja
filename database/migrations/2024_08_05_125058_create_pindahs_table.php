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
        Schema::create('pindahs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('wijk');
            $table->bigInteger('notelp');
            $table->string('alamat');
            $table->string('email');
            $table->string('tujuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pindahs');
    }
};