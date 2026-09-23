<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Laksa Benteng Carlendra - Warisan Kuliner Banten' ?></title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Outfit:wght@400;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        heading: ['"Outfit"', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0EA5E9', /* Warna Utama */
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        },
                        accent: '#F8FAFC', /* Warna Aksen */
                    },
                    boxShadow: {
                        'glow': '0 0 25px rgba(14, 165, 233, 0.35)',
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #F8FAFC;
        }
    </style>
</head>
<body class="font-sans text-slate-800 antialiased min-h-screen flex flex-col justify-between selection:bg-brand-500 selection:text-white">

    <!-- Top Notice Bar -->
    <div class="bg-slate-900 text-slate-300 text-xs py-2 px-4 border-b border-slate-800">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
            <div class="flex items-center gap-3">
                <span class="inline-flex items-center gap-1.5 px-2 py-0.5 rounded-full text-xs font-semibold bg-brand-500/20 text-brand-400 border border-brand-500/30">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand-400 animate-pulse"></span> Banten Heritage #10
                </span>
                <span>Warisan Kuliner Autentik Pasar Lama Tangerang &bull; Laksa Benteng Carlendra</span>
            </div>
            <div class="flex items-center gap-4 text-slate-400 text-xs">
                <span>Lionel Carlendra (No. 10)</span>
                <span class="text-slate-600">|</span>
                <?php if (session()->get('is_admin')): ?>
                    <a href="<?= base_url('admin/dashboard') ?>" class="text-brand-400 hover:text-brand-300 font-semibold flex items-center gap-1">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        Admin (<?= esc(session()->get('username')) ?>)
                    </a>
                    <a href="<?= base_url('admin/logout') ?>" class="hover:text-rose-400">Logout</a>
                <?php else: ?>
                    <a href="<?= base_url('admin/login') ?>" class="hover:text-brand-300 flex items-center gap-1 font-medium transition">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path></svg>
                        Login Admin
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Main Navigation Header -->
    <header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-slate-200/80 shadow-sm transition-all duration-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Brand Logo -->
                <a href="<?= base_url() ?>" class="flex items-center gap-3 group">
                    <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-brand-500 to-sky-600 flex items-center justify-center text-white shadow-glow group-hover:scale-105 transition-transform duration-300">
                        <span class="text-2xl font-black font-heading tracking-wider">C</span>
                    </div>
                    <div>
                        <div class="flex items-center gap-2">
                            <span class="font-heading font-extrabold text-xl sm:text-2xl text-slate-900 tracking-tight group-hover:text-brand-600 transition">
                                Laksa Benteng <span class="text-brand-500">Carlendra</span>
                            </span>
                        </div>
                        <p class="text-xs text-slate-500 font-medium tracking-wide">Cita Rasa Khas Banten &bull; Est. 2026</p>
                    </div>
                </a>

                <!-- Nav Menu Desktop -->
                <nav class="hidden md:flex items-center gap-8">
                    <a href="<?= base_url() ?>#beranda" class="text-sm font-semibold text-slate-700 hover:text-brand-500 transition">Beranda</a>
                    <a href="<?= base_url() ?>#menu" class="text-sm font-semibold text-slate-700 hover:text-brand-500 transition">Daftar Menu</a>
                    <a href="<?= base_url() ?>#filosofi" class="text-sm font-semibold text-slate-700 hover:text-brand-500 transition">Filosofi & Sejarah</a>
                    <a href="<?= base_url() ?>#keunggulan" class="text-sm font-semibold text-slate-700 hover:text-brand-500 transition">Keunggulan Rasa</a>
                </nav>

                <!-- Actions -->
                <div class="flex items-center gap-3">
                    <?php if (session()->get('is_admin')): ?>
                        <a href="<?= base_url('admin/dashboard') ?>" class="hidden sm:inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-slate-900 text-white hover:bg-slate-800 text-sm font-semibold shadow-md transition transform active:scale-95">
                            <svg class="w-4 h-4 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                            <span>Panel Admin</span>
                        </a>
                    <?php else: ?>
                        <a href="<?= base_url('admin/login') ?>" class="hidden sm:inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-brand-500 text-white hover:bg-brand-600 text-sm font-semibold shadow-md shadow-brand-500/25 transition transform active:scale-95">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            <span>Login Admin</span>
                        </a>
                    <?php endif; ?>

                    <!-- Mobile Hamburger Button -->
                    <button type="button" onclick="document.getElementById('mobileMenu').classList.toggle('hidden')" class="md:hidden p-2.5 rounded-xl bg-slate-100 text-slate-700 hover:bg-slate-200 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Drawer Menu -->
            <div id="mobileMenu" class="hidden md:hidden py-4 border-t border-slate-100 space-y-3">
                <a href="<?= base_url() ?>#beranda" class="block py-2 text-sm font-semibold text-slate-700 hover:text-brand-500 transition">Beranda</a>
                <a href="<?= base_url() ?>#menu" class="block py-2 text-sm font-semibold text-slate-700 hover:text-brand-500 transition">Daftar Menu Khas</a>
                <a href="<?= base_url() ?>#filosofi" class="block py-2 text-sm font-semibold text-slate-700 hover:text-brand-500 transition">Filosofi & Sejarah</a>
                <a href="<?= base_url() ?>#keunggulan" class="block py-2 text-sm font-semibold text-slate-700 hover:text-brand-500 transition">Keunggulan Rasa</a>
                <div class="pt-2 border-t border-slate-100">
                    <?php if (session()->get('is_admin')): ?>
                        <a href="<?= base_url('admin/dashboard') ?>" class="block py-2 text-sm font-bold text-brand-600">Buka Panel Admin &rarr;</a>
                    <?php else: ?>
                        <a href="<?= base_url('admin/login') ?>" class="block py-2 text-sm font-bold text-brand-600">Login Admin &rarr;</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>

    <!-- Flash Alert Notifications -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4 w-full">
        <?php if (session()->getFlashdata('success')): ?>
            <div class="flex items-center justify-between p-4 mb-4 text-emerald-800 border border-emerald-300 rounded-2xl bg-emerald-50 shadow-sm animate-fade-in" role="alert">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-xl bg-emerald-500 text-white flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <div class="text-sm font-medium"><?= session()->getFlashdata('success') ?></div>
                </div>
                <button type="button" onclick="this.parentElement.remove()" class="text-emerald-500 hover:text-emerald-700">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="flex items-center justify-between p-4 mb-4 text-rose-800 border border-rose-300 rounded-2xl bg-rose-50 shadow-sm" role="alert">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-xl bg-rose-500 text-white flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                    </div>
                    <div class="text-sm font-medium"><?= session()->getFlashdata('error') ?></div>
                </div>
                <button type="button" onclick="this.parentElement.remove()" class="text-rose-500 hover:text-rose-700">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
        <?php endif; ?>
    </div>

    <!-- Main Content Area -->
    <main class="flex-grow">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-300 border-t border-slate-800 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
                <div class="md:col-span-2">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-xl bg-brand-500 flex items-center justify-center text-white font-bold font-heading text-xl shadow-glow">
                            C
                        </div>
                        <span class="font-heading font-extrabold text-2xl text-white tracking-tight">
                            Laksa Benteng <span class="text-brand-400">Carlendra</span>
                        </span>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed max-w-md">
                        Mengangkat kuliner legendaris khas Banten ke panggung modern. Dibuat dengan kuah kaldu rempah kuning, kelapa sangrai wangi, daun kesum segar, dan bihun tepung beras putih pilihan warisan Pasar Lama Tangerang.
                    </p>
                    <div class="mt-6 flex items-center gap-3">
                        <span class="px-3 py-1 rounded-full text-xs font-semibold bg-brand-500/20 text-brand-400 border border-brand-500/30">
                            Warna Utama: #0EA5E9
                        </span>
                        <span class="px-3 py-1 rounded-full text-xs font-semibold bg-slate-800 text-slate-200 border border-slate-700">
                            Warna Aksen: #F8FAFC
                        </span>
                    </div>
                </div>

                <div>
                    <h4 class="text-white font-heading font-bold text-base mb-4">Menu Unggulan</h4>
                    <ul class="space-y-2 text-sm text-slate-400">
                        <li><a href="<?= base_url() ?>#menu" class="hover:text-brand-400 transition">Laksa Benteng Original</a></li>
                        <li><a href="<?= base_url() ?>#menu" class="hover:text-brand-400 transition">Laksa Spesial Ayam Panggang</a></li>
                        <li><a href="<?= base_url() ?>#menu" class="hover:text-brand-400 transition">Laksa Komplit Telur Puyuh</a></li>
                        <li><a href="<?= base_url() ?>#menu" class="hover:text-brand-400 transition">Laksa Sultan Carlendra Signature</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-heading font-bold text-base mb-4">Informasi Penugasan</h4>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        <strong class="text-white">Siswa:</strong> Lionel Carlendra<br>
                        <strong class="text-white">Nomor Presensi:</strong> 10<br>
                        <strong class="text-white">Provinsi:</strong> Banten<br>
                        <strong class="text-white">Kuliner:</strong> Laksa Benteng<br>
                        <strong class="text-white">Fitur:</strong> Filter &amp; Sorting<br>
                        <strong class="text-white">Framework:</strong> CodeIgniter 4 &amp; Tailwind CDN
                    </p>
                </div>
            </div>

            <div class="mt-12 pt-8 border-t border-slate-800/80 flex flex-col sm:flex-row justify-between items-center gap-4 text-xs text-slate-500">
                <p>&copy; <?= date('Y') ?> Restoran Laksa Benteng Carlendra. All rights reserved.</p>
                <p>Ujian Pemrograman Framework &bull; Full CRUD &bull; Responsive Design</p>
            </div>
        </div>
    </footer>

</body>
</html>
