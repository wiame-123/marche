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
        Schema::create('procurments', function (Blueprint $table) {
            $table->id();
            $table->string('objet');
            $table->text('description')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->decimal('total_amount', 15, 2)->nullable();
            $table->string('mode')->nullable();
            $table->string('place')->nullable();
            $table->unsignedTinyInteger('month_publication')->nullable();
            $table->year('year')->nullable();
            $table->string('status')->default('open');
            $table->timestamps();
            $table->boolean('state');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('procurments');
    }
};
