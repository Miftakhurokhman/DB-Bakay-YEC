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
        Schema::create('sub_activities', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("activityID");
            $table->foreignId("typeID");
            $table->integer("subActivityNumber");
            $table->string("subActivityName");
            $table->string("content");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_activities');
    }
};
