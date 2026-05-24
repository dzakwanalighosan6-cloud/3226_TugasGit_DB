<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Ticket - AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-indigo-600 text-white min-h-screen flex items-center justify-center p-6">

    <div class="max-w-md w-full">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-black mt-4">Pembayaran Berhasil!</h1>
            <p class="text-indigo-100 mt-2">Tiket Anda telah terbit dan siap digunakan.</p>
        </div>

        <div class="bg-white text-slate-900 rounded-[2.5rem] overflow-hidden shadow-2xl relative">
            <div class="p-8 bg-indigo-50 border-b-4 border-dashed border-indigo-100 text-center relative">
                <p class="text-indigo-600 font-bold uppercase tracking-widest text-xs mb-2">E-Ticket Resmi</p>
                <h2 class="text-2xl font-black leading-tight">Jazz Night 2024: A Celebration</h2>
            </div>

            <div class="px-8 py-6 pb-8 text-center">
                <p class="text-slate-400 text-xs font-bold uppercase mb-1">Scan QR untuk Check-in</p>
                <div class="w-48 h-48 bg-slate-200 mx-auto rounded-xl flex items-center justify-center font-bold text-slate-400">
                    [Area QR Code]
                </div>
                <p class="mt-4 font-mono font-bold text-slate-800">TKT-001293848</p>
                
                <button onclick="window.print()" class="w-full mt-6 py-4 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg hover:bg-indigo-700 transition">
                    Cetak PDF
                </button>
                <a href="/" class="block text-center mt-4 text-slate-500 font-bold hover:text-indigo-600">Kembali ke Beranda</a>
            </div>
        </div>
    </div>

</body>
</html>