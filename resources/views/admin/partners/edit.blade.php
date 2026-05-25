@extends('layouts.admin')

@section('title', 'Edit Partner')
@section('page_title', 'Edit Partner')
@section('page_subtitle', 'Ubah data partner atau ganti logonya.')

@section('content')
<div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-sm max-w-2xl">
    <form action="{{ route('admin.partners.update', $partner->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')
        
        <div>
            <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">Nama Partner</label>
            <input type="text" name="name" value="{{ old('name', $partner->name) }}" class="w-full px-5 py-4 bg-slate-50 border-2 border-slate-100 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium" required>
            @error('name') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">Logo Partner (Opsional)</label>
            <input type="file" name="logo" accept="image/*" class="w-full px-5 py-4 bg-slate-50 border-2 border-slate-100 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium">
            @error('logo') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
            
            @if($partner->logo_url)
            <div class="mt-4">
                <p class="text-sm font-bold text-slate-500 mb-2">Logo Saat Ini:</p>
                <img src="{{ asset('storage/' . $partner->logo_url) }}" class="h-20 w-auto object-contain rounded-xl border-2 border-slate-100 p-2">
            </div>
            @else
            <p class="text-xs text-slate-400 mt-2">Format: JPG, PNG, JPEG, SVG. Maks: 2MB.</p>
            @endif
        </div>

        <div class="pt-4 flex justify-end gap-4 border-t border-slate-100">
            <a href="{{ route('admin.partners.index') }}" class="px-6 py-4 text-slate-500 font-bold hover:text-slate-800 transition">Batal</a>
            <button type="submit" class="px-8 py-4 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg shadow-indigo-100 hover:bg-indigo-700 transition">Update Partner</button>
        </div>
    </form>
</div>
@endsection