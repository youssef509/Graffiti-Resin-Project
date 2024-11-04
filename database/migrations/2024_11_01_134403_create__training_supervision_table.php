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
        Schema::create('training_supervision', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('age');
            $table->string('phone');
            $table->string('city');
            $table->string('specialization');
            $table->string('current_job');
            $table->longText('reason');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_supervision');
    }
};
