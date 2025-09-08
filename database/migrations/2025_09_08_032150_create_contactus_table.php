<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contactus', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 100)->nullable();
            $table->string('lastname', 100)->nullable();
            $table->string('subject')->nullable();
            $table->text('description')->nullable();
            $table->boolean('is_active')->default(1);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contactus');
    }
};
