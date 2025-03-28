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
        Schema::create('catalog_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('catalog_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->boolean('is_redeemed')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalog_users');
    }
};
