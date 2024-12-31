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
        Schema::create('tsstfkaries', function (Blueprint $table) {
            $table->bigInteger('id')->unique();
            $table->char('kdkary',2)->primary();
            $table->char('nama',100);
            $table->char('email',255);
            $table->char('phone',14);
            $table->char('kddvsi',2);
            $table->date('dob');
            $table->date('regdt');
            $table->text('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tsstfkaries');
    }
};
