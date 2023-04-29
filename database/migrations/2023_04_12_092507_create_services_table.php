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
        Schema::create('services', function (Blueprint $table) {
            $table->id();

            $table->string('companyname')->default('unknown');
            $table->string('service');
            $table->integer('phone');
            $table->longText('description')->nullable();
            $table->integer('annualrevenues');
            $table->string('companywebsite');
            $table->longText('comments')->nullable();
            $table->time('time');
            $table->date('date');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
