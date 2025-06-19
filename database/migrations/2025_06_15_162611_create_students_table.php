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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->comment('student first name.')->max(255);
            $table->string('last_name')->comment('student last name.')->max(255);
            $table->string('program')->comment('student program.')->max(255);
            $table->string('enrollment_year')->comment('student enrollment year.')->max(4);
            $table->date('birthday')->comment('student birthday.');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('students');
    }
};
