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
        Schema::create('Ar_slider', function (Blueprint $table) {
            $table->id();
            $table->string('Ar_text1');
            $table->string('Ar_text2');
            $table->text('Ar_button_text');
            $table->string('Ar_button_url');
            $table->string('Ar_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Ar_slider');
    }
};
