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
        Schema::create('media_social', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();         // Foto akun media sosial
            $table->string('link');                      // Link menuju profil
            $table->string('nameaccount');               // Nama akun
            $table->string('namemediasocial');           // Nama platform (Facebook, IG, Twitter)
            $table->boolean('is_active')->default(0); // Status aktif/tidak
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media_social');
    }
};
