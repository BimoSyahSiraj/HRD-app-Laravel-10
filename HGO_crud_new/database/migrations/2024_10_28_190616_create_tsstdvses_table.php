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
        Schema::create('tsstdvses', function (Blueprint $table) {
            $table->bigInteger('id')->unique();
            $table->char('kddvsi',2)->primary();
            $table->char('nama',100);
            $table->double('dvsic',3,0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tsstdvses');
    }
};
