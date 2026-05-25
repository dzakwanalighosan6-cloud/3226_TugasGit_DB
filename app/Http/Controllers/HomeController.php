<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Partner; // Tambahan untuk memanggil tabel Partner
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // 1. Ambil semua jenis kategori
        $categories = Category::all();

        // 2. Ambil data Partner (Misi Soal 4 UTS) [cite: 1628-1629]
        $partners = Partner::latest()->get();

        // 3. Buat kueri dasar untuk mengambil event
        $query = Event::with('category')
                      ->where('date', '>', now())
                      ->orderBy('date', 'asc');

        // 4. Filter query berdasarkan kategori (Misi Soal 3 UTS)
        if ($request->has('category') && $request->category != '') {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        $events = $query->get();

        // 5. Kirim semua variabel ke tampilan welcome
        return view('welcome', compact('events', 'categories', 'partners'));
    }
}