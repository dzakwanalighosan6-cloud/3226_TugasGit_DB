@extends('layouts.admin')

@section('content')
<header class="flex justify-between items-center mb-10">
    <div>
        <h1 class="text-3xl font-black">Manajemen Kategori</h1>
        <p class="text-slate-500 font-medium">Atur kategori event yang tersedia di platform.</p>
    </div>
    <button class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg shadow-indigo-100 hover:bg-indigo-700 transition">
        + Tambah Kategori
    </button>
</header>

<div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest">
                <tr>
                    <th class="px-8 py-4 w-16">No</th>
                    <th class="px-8 py-4">Nama Kategori</th>
                    <th class="px-8 py-4">Total Event</th>
                    <th class="px-8 py-4">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y border-t">
                <tr class="hover:bg-slate-50/50 transition">
                    <td class="px-8 py-6 font-bold text-slate-400">1</td>
                    <td class="px-8 py-6 font-black text-slate-800">Seminar & Workshop</td>
                    <td class="px-8 py-6 text-indigo-600 font-bold">12 Event</td>
                    <td class="px-8 py-6">
                        <div class="flex gap-2">
                            <button class="px-4 py-2 bg-indigo-50 text-indigo-600 rounded-lg font-bold hover:bg-indigo-600 hover:text-white transition">Edit</button>
                            <button class="px-4 py-2 bg-rose-50 text-rose-600 rounded-lg font-bold hover:bg-rose-600 hover:text-white transition">Hapus</button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50/50 transition">
                    <td class="px-8 py-6 font-bold text-slate-400">2</td>
                    <td class="px-8 py-6 font-black text-slate-800">Konser Musik</td>
                    <td class="px-8 py-6 text-indigo-600 font-bold">5 Event</td>
                    <td class="px-8 py-6">
                        <div class="flex gap-2">
                            <button class="px-4 py-2 bg-indigo-50 text-indigo-600 rounded-lg font-bold hover:bg-indigo-600 hover:text-white transition">Edit</button>
                            <button class="px-4 py-2 bg-rose-50 text-rose-600 rounded-lg font-bold hover:bg-rose-600 hover:text-white transition">Hapus</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection