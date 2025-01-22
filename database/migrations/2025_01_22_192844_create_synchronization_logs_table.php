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
        Schema::create('synchronization_logs', function (Blueprint $table) {
            $table->id();
            $table->string('entity'); // This represents the entity being synced e.g personal record. 
            $table->unsignedBigInteger('entity_id')->nullable(); //ID of of the actual Row of data being synced
            $table->enum('sync_status', ['pending', 'synced'])->default('pending');
            $table->timestamp('last_synced')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('synchronization_logs');
    }
};
