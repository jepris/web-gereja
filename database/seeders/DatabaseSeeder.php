<?php

namespace Database\Seeders;
use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\News;
use App\Models\Schedule;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        DB::table('schedules')->insert([
            [
                'nama_ibadah' => 'Misa Minggu',
                'hari' => 'Minggu',
                'jam' => '08.00 - 10.00',
                'keterangan' => 'Ibadah utama setiap minggu.',
            ],
            [
                'nama_ibadah' => 'Doa Malam',
                'hari' => 'Rabu',
                'jam' => '08.00 - 10.00',
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

        DB::table('jemaats')->insert([
            [
                'name' => 'Jepri Simbolon',
                'birth_date' => Carbon::createFromFormat('d-m-Y', '24-02-1945')->format('Y-m-d'),                
                'alamat' => 'jl. Nalabarca 2',
                'notelp' => '85212296366',
                'umur' => '21',
            ],
            // Tambahkan data lainnya jika diperlukan
        ]);

        News::factory()->count(5)->create();
    }
}
