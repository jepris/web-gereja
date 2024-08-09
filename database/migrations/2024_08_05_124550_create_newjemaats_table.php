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
        Schema::create('newjemaats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('notelp');
            $table->string('alamat');
            $table->string('email');
            $table->string('asal');
            $table->string('file');
            $table->longText('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newjemaats');
    }
};
