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
        Schema::create('fasilitators', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("fasilName");
            $table->string("fasilPhoto");
            $table->text("fasilDesc");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fasilitators');
    }
};