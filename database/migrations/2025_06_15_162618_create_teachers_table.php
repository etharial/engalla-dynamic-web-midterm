<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->comment('teacher first name.')->max(255);
            $table->string('last_name')->comment('teacher last name.')->max(255);
            $table->string('email')->comment('teacher email.')->max(50);
            $table->string('department')->comment('teacher department.')->max(10);
            $table->date('birthday')->comment('teacher birthday.');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('teachers');
    }
};
