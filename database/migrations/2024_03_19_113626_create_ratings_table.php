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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jury_id');
            $table->unsignedBigInteger('participation_id');
            $table->unsignedTinyInteger('rating')->default(0); // Assuming rating is an integer from 1 to 5
            $table->boolean('like')->default(false);
            $table->timestamps();

            $table->foreign('jury_id')->references('id')->on('juries')->onDelete('cascade');
            $table->foreign('participation_id')->references('id')->on('participations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
