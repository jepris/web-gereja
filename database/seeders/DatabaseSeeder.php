<?php

namespace Database\Seeders;

use App\Models\Galeri;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Schedule;
use Faker\Factory as Faker;
use App\Models\News;
class DatabaseSeeder extends Seeder

{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Berita::factory(5)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $faker = Faker::create();

        // foreach(range(1, 10) as $index) {
        //     Galeri::create([
        //         'title' => $faker->sentence,
        //         'date' => $faker->date,
        //         'path' => null, // No path, so it uses dummy image
        //     ]);
        // }
        DB::table('schedules')->insert([
            [
                'nama_ibadah' => 'Misa Minggu',
                'hari' => 'Minggu',
                'keterangan' => 'Ibadah utama setiap minggu.',
            ],
            [
                'nama_ibadah' => 'Doa Malam',
                'hari' => 'Rabu',
                'keterangan' => 'Ibadah doa malam minggu.',
            ],
            // Tambahkan data lainnya jika diperlukan
        ]);

        // Seed news table
        // DB::table('news')->insert([
        //     [
        //         'title' => 'Kegiatan Gereja Bulan Ini',
        //         'description' => 'Berbagai kegiatan yang akan diadakan oleh gereja bulan ini.',
        //         'img' => 'kegiatan-bulan-ini.jpg', // Pastikan gambar ini ada di direktori public/storage
        //     ],
        //     [
        //         'title' => 'Pemberitahuan Penting',
        //         'description' => 'Pemberitahuan mengenai perubahan jadwal ibadah.',
        //         'img' => 'pemberitahuan-penting.jpg', // Pastikan gambar ini ada di direktori public/storage
        //     ],
        //     // Tambahkan data lainnya jika diperlukan
        // ]);
        News::factory()->count(5)->create();
    }
}
