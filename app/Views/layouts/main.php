<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?? 'Ujian Pemrograman Framework' ?></title>
    <!-- Tailwind CSS CDN sesuai ketentuan ujian -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen flex flex-col">

    <!-- Header / Navbar -->
    <header class="bg-white border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-indigo-600 to-violet-500 flex items-center justify-center text-white font-bold text-lg shadow-md shadow-indigo-200">
                        CI4
                    </div>
                    <div>
                        <span class="font-bold text-lg text-slate-900 tracking-tight">Ujian Framework</span>
                        <span class="text-xs block text-slate-400">CodeIgniter 4 + Tailwind CSS</span>
                    </div>
                </div>
                <nav class="flex items-center space-x-2">
                    <a href="<?= base_url('/') ?>" class="px-3 py-2 rounded-lg text-sm font-medium text-slate-700 hover:text-indigo-600 hover:bg-slate-100 transition">Beranda</a>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-800">
                        <span class="w-1.5 h-1.5 mr-1.5 bg-emerald-500 rounded-full animate-pulse"></span>
                        Siap Ujian
                    </span>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="flex-grow max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-slate-200 py-6 mt-auto">
        <div class="max-w-7xl mx-auto px-4 text-center text-sm text-slate-500">
            &copy; <?= date('Y') ?> Ujian Pemrograman Framework &bull; CodeIgniter 4 &bull; Tailwind CSS
        </div>
    </footer>

</body>
</html>
