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
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone_number')->nullable();       // Menambahkan kolom phone_number
            $table->date('hire_date')->nullable();            // Menambahkan kolom hire_date
            $table->string('job_id')->nullable();             // Menambahkan kolom job_id
            $table->decimal('salary', 15, 2)->nullable();     // Menambahkan kolom salary
            $table->decimal('commision_pct', 5, 2)->nullable(); // Menambahkan kolom commision_pct
            $table->unsignedBigInteger('manager_id')->nullable(); // Menambahkan kolom manager_id
            $table->unsignedBigInteger('department_id')->nullable(); // Menambahkan kolom department_id
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'phone_number',
                'hire_date',
                'job_id',
                'salary',
                'commision_pct',
                'manager_id',
                'department_id'
            ]);
        });
    }
};
