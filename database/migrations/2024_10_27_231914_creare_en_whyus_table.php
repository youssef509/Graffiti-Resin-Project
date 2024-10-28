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
        Schema::create('En_whyus', function (Blueprint $table) {
            $table->id();
            $table->string('title1');
            $table->string('title2');
            $table->longText('text1');
            $table->longText('text2');
            $table->string('video_url');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('En_whyus');
    }
};
