<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sejarah', function (Blueprint $table) {
            $table->id(); // PK (Primary Key)
            $table->string('photo')->nullable(); // path foto
            $table->string('title'); // judul
            $table->text('description'); // deskripsi
            $table->boolean('is_active')->default(true); // status aktif/nonaktif
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sejarah');
    }
};
