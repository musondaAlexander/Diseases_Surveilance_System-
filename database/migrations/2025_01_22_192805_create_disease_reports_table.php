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
        Schema::create('disease_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('facility_id')->nullable();
            $table->unsignedBigInteger('disease_id')->nullable();
            $table->unsignedBigInteger('reporter_id')->nullable();
            $table->date('reported_date')->nullable();
            $table->integer('number_of_cases')->nullable();
            $table->integer('number_of_deaths')->nullable();
            $table->integer('number_of_reoveries')->nullable();
            $table->text('notes')->nullable();
            $table->timestamp('created_at')->nullable(); // Default created_at and updated_at
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disease_reports');
    }
};
