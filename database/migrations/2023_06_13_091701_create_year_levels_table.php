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
        Schema::create('year_levels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->references('id')->on('course_sections');
            $table->string('year_level');
            $table->string('status')->default("active");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('year_levels');
    }
};
