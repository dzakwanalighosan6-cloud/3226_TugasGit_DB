<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Event;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Akun Admin Utama [cite: 615-621]
        User::create([
            'name' => 'Admin Amikom',
            'email' => 'admin@amikom.ac.id',
            'password' => bcrypt('password'),
        ]);

        // 2. Insert Kategori Event (Tugas: 3 Kategori) [cite: 625, 688]
        $catTech = Category::create(['name' => 'Seminar IT & Tech', 'slug' => 'seminar-it-tech']);
        $catMusic = Category::create(['name' => 'Konser Musik', 'slug' => 'konser-musik']);
        $catEsport = Category::create(['name' => 'Turnamen E-Sport', 'slug' => 'turnamen-esport']);

        // 3. Insert Sampel Events (Tugas: 6 Event Bervariatif) [cite: 637, 688]
        Event::create([
            'category_id' => $catTech->id,
            'title' => 'AI & FUTURE TECH SUMMIT 2026',
            'description' => 'Jelajahi tren terkini dalam kecerdasan buatan.',
            'date' => '2026-05-01 13:00:00',
            'location' => 'Cinema Unit 6',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-3.png',
        ]);
        
        Event::create([
            'category_id' => $catTech->id,
            'title' => 'UI/UX Masterclass',
            'description' => 'Belajar membuat desain aplikasi yang user-friendly bersama expert.',
            'date' => '2026-06-15 09:00:00',
            'location' => 'Ruang Citra 1',
            'price' => 45000,
            'stock' => 50,
            'poster_path' => 'posters/event-2.png',
        ]);

        Event::create([
            'category_id' => $catMusic->id,
            'title' => 'Jazz Night 2026',
            'description' => 'Nikmati malam dengan alunan musik jazz yang merdu.',
            'date' => '2026-05-10 19:00:00',
            'location' => 'Amikom Baru',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-1.png',
        ]);

        Event::create([
            'category_id' => $catMusic->id,
            'title' => 'Amikom Fest Vol 3',
            'description' => 'Festival musik tahunan terbesar di kampus ungu.',
            'date' => '2026-07-20 18:00:00',
            'location' => 'Halaman Depan',
            'price' => 85000,
            'stock' => 300,
            'poster_path' => 'posters/event-1.png',
        ]);

        Event::create([
            'category_id' => $catEsport->id,
            'title' => 'Mobile Legends U-Champ',
            'description' => 'Buktikan timmu adalah yang terkuat di land of dawn!',
            'date' => '2026-06-01 10:00:00',
            'location' => 'Lab E-Sport',
            'price' => 100000,
            'stock' => 32,
            'poster_path' => 'posters/event-2.png',
        ]);

        Event::create([
            'category_id' => $catEsport->id,
            'title' => 'Valorant Campus League',
            'description' => 'Turnamen Valorant antar mahasiswa bergengsi tahun ini.',
            'date' => '2026-06-05 13:00:00',
            'location' => 'Lab E-Sport',
            'price' => 150000,
            'stock' => 16,
            'poster_path' => 'posters/event-3.png',
        ]);
    }
}