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
        Schema::create('tenagakerja', function (Blueprint $table) {
            $table->id(); // PK
            $table->string('photo')->nullable(); // path foto
            $table->string('name'); // nama tenaga kerja
            $table->text('description')->nullable(); // deskripsi
            $table->string('position')->nullable(); // jabatan/posisi
            $table->boolean('is_active')->default(0); // status aktif / non-aktif
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenagakerja');
    }
};
