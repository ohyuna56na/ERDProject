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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id('EnrollmentID'); // Primary key
            $table->unsignedBigInteger('StudentID'); // Foreign key
            $table->unsignedBigInteger('CourseID');  // Foreign key
            $table->date('EnrollmentDate');
            $table->timestamps();
        
            // Foreign key constraints
            $table->foreign('StudentID')->references('StudentID')->on('students')->onDelete('cascade');
            $table->foreign('CourseID')->references('CourseID')->on('courses')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
