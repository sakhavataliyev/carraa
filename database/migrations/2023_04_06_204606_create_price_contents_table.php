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
        Schema::create('price_contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plan_id');
            $table->string('title');
            $table->string('content')->nullable();
            $table->tinyInteger('sort_number')->default(1);
            $table->boolean('status')->default(false);
            $table->foreign('plan_id')->references('id')->on('price_plans')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('price_contents');
    }
};
