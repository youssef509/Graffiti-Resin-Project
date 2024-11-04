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
        Schema::create('ar_blog', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('text1');
            $table->longText('text2');
            $table->longText('text3');
            $table->longText('text4');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ar_blog');
    }
};
