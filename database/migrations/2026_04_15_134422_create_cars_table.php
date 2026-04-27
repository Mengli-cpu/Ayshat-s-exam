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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price');
            $table->integer('year')->unsigned();
            $table->string('brand');
            $table->string('model');
            $table->string('color');
            $table->float('engine')->unsigned();
            $table->string('location');
            $table->boolean('is_credit')->default(0);
            $table->boolean('is_exchanged')->default(0);
            $table->string('code');
            $table->string('owner');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
