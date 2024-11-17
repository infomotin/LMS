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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            //course primary info 
            $table->integer('category_id')->nullable();
            $table->integer('subcategory_id')->nullable();
            $table->integer('instructor_id')->nullable();
            $table->string('course_image')->nullable();
            $table->string('course_title')->nullable();
            $table->string('course_name')->nullable();
            $table->string('course_name_slug')->nullable();
            //
            $table->longText('course_description')->nullable();
            $table->string('course_duration')->nullable();
            $table->string('course_intovideo')->nullable();
            $table->string('course_level')->nullable();
            $table->string('course_language')->nullable();
            $table->string('course_resources')->nullable();
            $table->string('course_certificate')->nullable();
            //

            $table->decimal('course_price')->nullable();
            $table->decimal('course_discount')->nullable();
            $table->text('course_prerequisites')->nullable();
            $table->string('course_bestseller')->nullable();
            $table->string('course_features')->nullable();
            $table->string('course_heighestrated')->nullable();
            $table->tinyInteger('course_status')->default(1)->nullable();
            //soft delete and timestamp
            $table->softDeletes();
            $table->auditable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
