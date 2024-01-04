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
        Schema::create('user_classes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("userID");
            $table->integer("classID");
            $table->string("progress");
            $table->float("rate")->nullable();
            $table->text("ulasan")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_classes');
    }
};
