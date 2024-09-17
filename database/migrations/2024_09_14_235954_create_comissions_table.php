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
        Schema::create('comissions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('role');
            $table->foreignId('users_id')->constrained();
            $table->foreignId('vice')->constrained(table: 'users', indexName: 'user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comissions');
    }
};
