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
        Schema::create('appeloffres', function (Blueprint $table) {
            $table->id();
            $table->text('objectif_fr')->nullable();
            $table->text('objectif_ar')->nullable();
            $table->year('year');
            $table->string('code');
            $table->integer('num_app');
            $table->timestamps();
            $table->foreignId('departements_id')->constrained();
            $table->foreignId('budjet_id')->constrained();
            $table->foreignId('procurment_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->decimal('estimation',10,2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appeloffres');
    }
};
