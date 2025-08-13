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
     // database/migrations/[timestamp]_create_events_table.php
Schema::create('events', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->text('description');
    $table->foreignId('category_id')->constrained();
    $table->foreignId('host_id')->constrained('users');
    $table->string('location');
    $table->string('city');
    $table->decimal('latitude', 10, 7)->nullable();
    $table->decimal('longitude', 10, 7)->nullable();
    $table->dateTime('start_date');
    $table->dateTime('end_date');
    $table->decimal('fee', 10, 2);
    $table->integer('capacity')->nullable();
    $table->boolean('is_featured')->default(false);
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
