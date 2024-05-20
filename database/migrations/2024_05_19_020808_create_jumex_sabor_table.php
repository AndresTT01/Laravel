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
        Schema::create('jumex_sabor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jumex_id');
            $table->unsignedBigInteger('sabor_id');
            $table->timestamps();

            $table->foreign('jumex_id')->references('id')->on('jumexes')->onDelete('cascade');
            $table->foreign('sabor_id')->references('id')->on('sabors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jumex_sabor');
    }
};
