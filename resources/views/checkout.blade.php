<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-indigo-50/30 text-slate-900">

    <main class="max-w-3xl mx-auto px-6 py-20">
        <div class="mb-12">
            <a href="/event/1" class="text-indigo-600 font-bold flex items-center gap-2 mb-6">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                Kembali ke Event
            </a>
            <h1 class="text-4xl font-extrabold">Checkout</h1>
            <p class="text-slate-500 mt-2">Lengkapi data Anda untuk mendapatkan tiket.</p>
        </div>

        <div class="grid grid-cols-1 gap-8">
            <div class="bg-white rounded-3xl border border-slate-200 p-8 shadow-sm">
                <h3 class="text-xl font-bold mb-6 border-b pb-4">Pesanan Anda</h3>
                <div class="flex gap-6 items-start">
                    <img src="{{ asset('assets/concert.png') }}" alt="Event" class="w-24 h-24 rounded-2xl object-cover">
                    <div>
                        <h4 class="font-extrabold text-lg">Jazz Night 2024: A Celebration</h4>
                        <p class="text-slate-500">16 Nov 2024 • The Blue Note Lounge</p>
                        <p class="text-indigo-600 font-bold mt-2">1 x Rp 150.000</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-3xl border border-slate-200 p-8 shadow-sm">
                <h3 class="text-xl font-bold mb-6 italic text-indigo-600 underline underline-offset-8">📦 Data Pemesan</h3>
                <form class="space-y-6">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">Nama Lengkap</label>
                        <input type="text" placeholder="Masukkan nama sesuai identitas" class="w-full px-5 py-4 bg-white border-2 border-slate-100 rounded-2xl outline-none" required>
                    </div>
                    <button type="button" onclick="showMidtrans()" class="w-full py-5 bg-indigo-600 text-white rounded-2xl font-black text-xl shadow-xl hover:bg-indigo-700 transition-all">
                        Bayar Sekarang
                    </button>
                </form>
            </div>
        </div>
    </main>

    <div id="midtrans-overlay" class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-50 hidden flex items-center justify-center p-6">
        <div class="bg-white w-full max-w-sm rounded-[2rem] overflow-hidden shadow-2xl">
            <div class="bg-slate-50 p-6 flex justify-between items-center border-b">
                <span class="font-bold text-indigo-900">Midtrans Simulator</span>
                <button onclick="hideMidtrans()" class="p-2 hover:bg-slate-200 rounded-full">X</button>
            </div>
            <div class="p-8 text-center">
                <p class="text-slate-500 font-medium">Total Tagihan</p>
                <h2 class="text-3xl font-black text-indigo-700 my-2">Rp 150.000</h2>
                
                <div class="mt-8 space-y-4">
                    <button onclick="window.location.href='/my-ticket'" class="w-full py-4 border-2 border-indigo-100 rounded-2xl flex justify-between items-center px-6 hover:border-indigo-600 transition group">
                        <span class="font-bold group-hover:text-indigo-600">GoPay / QRIS</span>
                        <span class="text-indigo-400">→</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showMidtrans() {
            document.getElementById('midtrans-overlay').classList.remove('hidden');
            document.getElementById('midtrans-overlay').classList.add('flex');
        }
        function hideMidtrans() {
            document.getElementById('midtrans-overlay').classList.add('hidden');
            document.getElementById('midtrans-overlay').classList.remove('flex');
        }
    </script>
</body>
</html>