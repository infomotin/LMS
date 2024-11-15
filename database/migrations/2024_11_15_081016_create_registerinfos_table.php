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
        Schema::create('registerinfos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone');
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('country')->nullable();
            $table->string('profile_picture')->nullable();
            //personal info
            $table->enum('gender', ['male', 'female', 'other'])->default('male');
            $table->date('date_of_birth');
            $table->enum('marital_status', ['single', 'married', 'divorced', 'widowed', 'separated', 'other'])->default('single');
            $table->enum('religion', ['islam', 'christianity', 'hinduism', 'judaism', 'buddhism', 'sikhism', 'other'])->default('islam');
            $table->enum('caste', ['general', 'obc', 'sc', 'st', 'other'])->default('general');
            $table->enum('blood_group', ['a+', 'a-', 'b+', 'b-', 'ab+', 'ab-', 'o+', 'o-'])->default('a+');
            $table->enum('nationality', ['Bangladesh', 'non-bangladesh'])->default('Bangladesh');
            //request info
            $table->string('ip_address');
            $table->string('user_agent');
            $table->string('browser');
            $table->string('os');
            $table->string('device')->nullable();
            //audit info
            $table->auditable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registerinfos');
    }
};
