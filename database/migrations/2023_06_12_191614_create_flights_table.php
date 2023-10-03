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
        info('migrate çalıştı');
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('from');
            $table->string('to');
            $table->integer('passenger_count');
            $table->double('price');
            $table->string('pilot')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        info('rollback çalıştı');
        Schema::dropIfExists('flights');
    }
};
