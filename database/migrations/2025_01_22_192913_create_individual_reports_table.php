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
        Schema::create('individual_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('facility_id')->nullable();
            $table->unsignedBigInteger('disease_id')->nullable();
            $table->integer('age')->nullable();
            $table->enum('gender', ['m', 'f']);
            $table->string('location')->nullable();
            $table->text('symptoms')->nullable();
            $table->enum('result', ['positive', 'negative'])->default('negative');
            $table->text('diagnosis')->nullable();
            $table->unsignedBigInteger('reported_by')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('individual_reports');
    }
};
