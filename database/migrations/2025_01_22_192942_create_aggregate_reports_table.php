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
        Schema::create('aggregate_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('facility_id')->nullable();
            $table->integer('age_group')->nullable();
            $table->string('gender')->nullable();
            $table->integer('number_of_cases')->nullable();
            $table->integer('number_of_deaths')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aggregate_reports');
    }
};
