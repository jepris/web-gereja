<?php

namespace Database\Seeders;

use App\Models\Galeri;
// use Illuminate\Support\Facades\DB;
// // use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;
// use App\Models\Schedule;
// use Faker\Factory as Faker;
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
                'nama_ibadah' => 'Ibadah Sekolah Minggu',
                'hari' => 'Minggu',
                'jam' => '08.00 - 10.00',
                'keterangan' => 'Gedung Sekolah Minggu',
            ],
            [
                'nama_ibadah' => 'Ibadah Minggu Bahasa Indonesia',
                'hari' => 'Minggu',
                'jam' => '08.00 - 10.00',
                'keterangan' => 'Gedung HKBP Perumnas Batu Onom',
            ],
            [
                'nama_ibadah' => 'Ibadah Minggu Bahasa Batak',
                'hari' => 'Minggu',
                'jam' => '10.00 - 12.00',
                'keterangan' => 'Gedung HKBP Perumnas Batu Onom',
            ],
            [
                'nama_ibadah' => 'Ibadah Minggu Remaja Naposo',
                'hari' => 'Minggu',
                'jam' => '16.00 - 18.00',
                'keterangan' => 'Gedung HKBP Perumnas Batu Onom',
            ],
            [
                'nama_ibadah' => 'Kebaktian Partangiangan Sektor 1,3,6,11,16',
                'hari' => 'Selasa',
                'jam' => '19.30 - 21.00',
                'keterangan' => 'Di Rumah Jemaat',
            ],
            [
                'nama_ibadah' => 'Kebaktian Partangiangan Sektor 2,5,7,8,9,10',
                'hari' => 'Rabu',
                'jam' => '19.30 - 21.00',
                'keterangan' => 'Di Rumah Jemaat',
            ],
            [
                'nama_ibadah' => 'Kebaktian Partangiangan Sektor 4,12,13,14,15',
                'hari' => 'Kamis',
                'jam' => '19.30 - 21.00',
                'keterangan' => 'Di Rumah Jemaat',
            ],
            [
                'nama_ibadah' => 'Kunjungan Jemaat Sakit',
                'hari' => 'Selasa dan Jumat',
                'jam' => '10.00 - 17.00',
                'keterangan' => 'Kunjungan',
            ],
            [
                'nama_ibadah' => 'Kebaktian Partangiangan Remaja Naposo',
                'hari' => 'Sabtu',
                'jam' => '19.30 - 21.00',
                'keterangan' => 'Gedung Konsistori Lantai 2',
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
                'wijk' => '13',
                'notelp' => '85212296366',
                'umur' => '21',
            ],
            // Tambahkan data lainnya jika diperlukan
        ]);

        News::factory()->count(5)->create();
    }
}
