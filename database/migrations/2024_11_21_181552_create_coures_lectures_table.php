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
        Schema::create('coures_lectures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->unsignedBigInteger('section_id');
            $table->foreign('section_id')->references('id')->on('coures_sections')->onDelete('cascade');
            $table->string('lecture_title')->nullable();

            $table->string('lecture_video')->nullable();
            $table->string('lecture_url')->nullable();
            $table->text('lecture_content')->nullable();
            $table->string('lecture_file')->nullable();
            $table->enum('lecture_status', ['active', 'inactive','pending','blocked','deleted'])->default('active');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coures_lectures');
    }
};
