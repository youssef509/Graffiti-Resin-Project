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
        Schema::create('En_slider', function (Blueprint $table) {
            $table->id();
            $table->string('En_text1');
            $table->string('En_text2');
            $table->text('En_button_text');
            $table->string('En_button_url');
            $table->string('En_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('En_slider');
    }
};
