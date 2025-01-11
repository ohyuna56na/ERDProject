<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->id('AssignmentID');
            $table->unsignedBigInteger('CourseID');
            $table->string('AssignmentName');
            $table->text('AssignmentDescription')->nullable();
            $table->date('DueDate');
            $table->timestamps();

            $table->foreign('CourseID')->references('CourseID')->on('courses')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
