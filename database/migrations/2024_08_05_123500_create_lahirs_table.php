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
        Schema::create('lahirs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('wijk');
            $table->bigInteger('notelp');
            $table->string('alamat');
            $table->string('email');
            $table->string('lahir');
            $table->enum('jeniskelamin',['pria', 'wanita']);
            $table->string('rs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lahirs');
    }
};
