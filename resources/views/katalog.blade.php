<!DOCTYPE html>
<html>
<head>
    <title>Katalog - Tugas Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen p-8 font-sans">
    
    <nav class="max-w-2xl mx-auto bg-white p-4 rounded-lg shadow-md mb-8 flex justify-center space-x-2 md:space-x-4 border border-slate-200">
        <a href="/" class="px-4 py-2 bg-gray-100 text-gray-700 rounded hover:bg-gray-200 transition font-semibold">Home</a>
        <a href="/profil" class="px-4 py-2 bg-gray-100 text-gray-700 rounded hover:bg-gray-200 transition font-semibold">Profil</a>
        <a href="/katalog" class="px-4 py-2 bg-indigo-600 text-white rounded shadow transition font-semibold">Katalog</a>
        <a href="/bantuan" class="px-4 py-2 bg-gray-100 text-gray-700 rounded hover:bg-gray-200 transition font-semibold">Bantuan</a>
        <a href="/kontak" class="px-4 py-2 bg-gray-100 text-gray-700 rounded hover:bg-gray-200 transition font-semibold">Kontak</a>
    </nav>

    <div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-lg border border-slate-200">
        <h1 class="text-3xl font-bold text-center text-slate-800 mb-6">Katalog Event AmikomEventHub</h1>
        
        <div class="grid gap-4">
            <div class="p-5 border border-slate-200 rounded-lg bg-slate-50 hover:shadow-md transition">
                <h2 class="font-bold text-xl text-indigo-700">Seminar UI/UX & Web Design</h2>
                <p class="text-slate-600 mt-1">Belajar fundamental desain antarmuka modern.</p>
                <span class="inline-block mt-3 bg-indigo-100 text-indigo-800 text-xs px-2 py-1 rounded font-semibold">Online</span>
            </div>
            
            <div class="p-5 border border-slate-200 rounded-lg bg-slate-50 hover:shadow-md transition">
                <h2 class="font-bold text-xl text-indigo-700">Workshop Laravel Masterclass</h2>
                <p class="text-slate-600 mt-1">Kupas tuntas framework PHP paling populer.</p>
                <span class="inline-block mt-3 bg-green-100 text-green-800 text-xs px-2 py-1 rounded font-semibold">Offline</span>
            </div>
        </div>
    </div>

</body>
</html>