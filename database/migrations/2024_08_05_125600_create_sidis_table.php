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
        Schema::create('sidis', function (Blueprint $table) {
            $table->id();
            $table->string('wali');
            $table->string('wijk');
            $table->bigInteger('notelp');
            $table->string('alamat');
            $table->string('email');
            $table->longText('keterangan');
            $table->string('fileakte');
            $table->string('filebaptis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sidis');
    }
};
