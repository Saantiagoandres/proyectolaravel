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
        Schema::create('commentaries', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->timestamps();

            $table->unsignedBigInteger('multimedia_id');
            $table->foreign('multimedia_id')
            ->references('id')
            ->on('multimedia')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('candidate_id');
            $table->foreign('candidate_id')
            ->references('id')
            ->on('candidates')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('headhunter_id');
            $table->foreign('headhunter_id')
            ->references('id')
            ->on('headhunters')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commentaries');
    }
};
