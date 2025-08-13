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
  // database/migrations/[timestamp]_create_rsvps_table.php
Schema::create('rsvps', function (Blueprint $table) {
    $table->id();
    $table->foreignId('event_id')->constrained();
    $table->foreignId('user_id')->constrained();
    $table->integer('guests')->default(1);
    $table->text('notes')->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rsvps');
    }
};
