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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id(); // Primary Key (auto increment)
            $table->string('photo_profile')->nullable(); // foto profile
            $table->string('name');                      // nama client
            $table->text('description');                 // isi testimonial
            $table->unsignedTinyInteger('rating')->default(5); // rating 1-5
            $table->boolean('is_active')->default(0);    // status aktif / tidak
            $table->timestamps();                        // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
