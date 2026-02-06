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

         Schema::create('evaluations', function (Blueprint $table) {
              $table->id();

              $table->foreignId('user_id')
                    ->constrained()
                    ->cascadeOnDelete();

              $table->foreignId('teacher_id')
                    ->constrained('users')
                    ->cascadeOnDelete();

              $table->foreignId('brief_id')
                    ->constrained()
                    ->cascadeOnDelete();

              $table->foreignId('competence_id')
                    ->constrained()
                    ->cascadeOnDelete();

              $table->string('skill_level');
              $table->text('commentaire')->nullable();

              $table->string('status');

              $table->timestamps();
          });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
