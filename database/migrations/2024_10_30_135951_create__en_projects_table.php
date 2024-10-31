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
        Schema::create('en_projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->string('project_customer');
            $table->string('project_category');
            $table->string('project_location');
            $table->string('project_date');
            $table->longText('project_description1');
            $table->longText('project_description2');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('en_projects');
    }
};
