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

            $table->unsignedBigInteger('Multimedia_id');
            $table->foreign('Multimedia_id')
            ->references('id')
            ->on('multimedia')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('Candidates_id');
            $table->foreign('Candidates_id')
            ->references('id')
            ->on('candidates')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('Headhunter_id');
            $table->foreign('Headhunter_id')
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
