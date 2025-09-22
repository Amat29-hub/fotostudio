<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('media_socials')->insert([
            [
                'photo' => 'mediasocial/instagram.png',
                'name_account' => 'magic foto',
                'name_mediasocial' => 'instagram',
                'link' => 'https://www.instagram.com/magic_foto',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'photo' => 'mediasocial/facebook.png',
                'name_account' => 'magic foto',
                'name_mediasocial' => 'facebook',
                'link' => 'https://www.facebook.com/magicfoto',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'photo' => 'mediasocial/tiktok.png',
                'name_account' => 'magic_foto',
                'name_mediasocial' => 'tiktok',
                'link' => 'https://www.tiktok.com/@magic_foto',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
