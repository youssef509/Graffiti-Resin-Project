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
        Schema::create('implementationofworks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('city');
            $table->string('client_category');
            $table->string('project_type')->nullable();
            $table->string('building_type')->nullable();
            $table->string('area_for_materials')->nullable();
            $table->string('thickness')->nullable();
            $table->string('image_need')->nullable();
            $table->string('image')->nullable();
            $table->string('floor_statue')->nullable();
            $table->string('gaps')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('implementationofworks');
    }
};
