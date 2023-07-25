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
        Schema::create('options', function (Blueprint $table) {
            $table->int('numero');
            $table->string('libelle');
            $table->timestamps();
            $table->primary('numero');
        });
        Schema::create('bien_option', function (Blueprint $table) {
            $table->foreignId('bien_id')->constrained();
            $table->foreignId('option_id')->constrained();
            $table->primary(['bien_id', 'option_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bien_option');
        Schema::dropIfExists('options');
    }
};
