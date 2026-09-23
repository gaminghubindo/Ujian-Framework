<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section id="beranda" class="relative overflow-hidden pt-12 pb-20 lg:pt-20 lg:pb-28 bg-gradient-to-b from-sky-50 via-white to-slate-50">
    <!-- Decorative background elements -->
    <div class="absolute -top-24 -right-24 w-96 h-96 bg-brand-400/20 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute top-1/2 -left-24 w-80 h-80 bg-brand-600/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Hero Content -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                <!-- Badge Penugasan -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-brand-500/10 border border-brand-500/30 text-brand-600 text-xs font-bold uppercase tracking-wider shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-brand-500 animate-ping"></span>
                    <span>Warisan Kuliner Banten &bull; No. 10 Lionel Carlendra</span>
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black font-heading text-slate-900 tracking-tight leading-[1.15]">
                    Mengangkat Kelezatan <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-600 via-sky-500 to-cyan-500">Laksa Benteng</span> 
                    ke Panggung Modern
                </h1>

                <p class="text-base sm:text-lg text-slate-600 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                    Nikmati sajian legendaris khas Pasar Lama Tangerang. Perpaduan sempurna bihun tepung beras kenyal, kuah kuning santan kaldu ayam kaya rempah, taburan kelapa sangrai wangi, daun kesum segar, dan renyahnya emping melinjo.
                </p>

                <!-- CTA Buttons -->
                <div class="pt-2 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                    <a href="#menu" class="w-full sm:w-auto px-8 py-4 rounded-2xl bg-brand-500 hover:bg-brand-600 text-white font-extrabold text-sm sm:text-base shadow-lg shadow-brand-500/35 hover:shadow-brand-500/50 transition duration-200 transform hover:-translate-y-0.5 flex items-center justify-center gap-2">
                        <span>Jelajahi Menu Khas</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </a>
                    <a href="#filosofi" class="w-full sm:w-auto px-8 py-4 rounded-2xl bg-white hover:bg-slate-50 text-slate-700 font-bold text-sm sm:text-base border border-slate-200/90 shadow-sm transition flex items-center justify-center gap-2">
                        <span>Filosofi &amp; Sejarah</span>
                        <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </a>
                </div>

                <!-- Trust Points / Stats -->
                <div class="pt-6 grid grid-cols-3 gap-4 border-t border-slate-200/80 max-w-lg mx-auto lg:mx-0 text-left">
                    <div>
                        <div class="text-2xl sm:text-3xl font-black font-heading text-slate-900">100%</div>
                        <div class="text-xs text-slate-500 font-medium mt-0.5">Rempah Asli Banten</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-black font-heading text-brand-600">10+</div>
                        <div class="text-xs text-slate-500 font-medium mt-0.5">Variasi Hidangan</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-black font-heading text-amber-500">4.9 ★</div>
                        <div class="text-xs text-slate-500 font-medium mt-0.5">Kepuasan Pelanggan</div>
                    </div>
                </div>
            </div>

            <!-- Right Hero Visual Card -->
            <div class="lg:col-span-5 relative">
                <div class="relative mx-auto max-w-md lg:max-w-none">
                    <!-- Main Hero Image Box -->
                    <div class="rounded-3xl overflow-hidden shadow-2xl border-4 border-white bg-slate-900 aspect-square relative group">
                        <img src="<?= base_url('images/laksa-hero.jpg') ?>" alt="Sajian Laksa Benteng Carlendra" class="w-full h-full object-cover group-hover:scale-105 transition duration-700" onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1569718212165-3a8278d5f624?auto=format&fit=crop&w=800&q=80'">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                        
                        <div class="absolute bottom-6 left-6 right-6 text-white">
                            <span class="inline-block px-3 py-1 rounded-lg text-xs font-bold bg-brand-500 text-white mb-2 shadow-md">
                                Signature Dish
                            </span>
                            <h3 class="text-xl sm:text-2xl font-black font-heading text-white">Laksa Benteng Sultan Carlendra</h3>
                            <p class="text-xs text-slate-300 mt-1 line-clamp-2">Porsi mewah dengan ayam kampung bakar, udang jumbo, telur puyuh, ati ampela, dan kuah kaldu santan ganda.</p>
                        </div>
                    </div>

                    <!-- Floating Badge 1 -->
                    <div class="absolute -top-4 -left-4 bg-white/95 backdrop-blur-md px-4 py-3 rounded-2xl shadow-xl border border-slate-100 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-500 flex items-center justify-center font-bold text-lg">
                            🍲
                        </div>
                        <div>
                            <div class="text-xs font-extrabold text-slate-800">Resep Turun-Temurun</div>
                            <div class="text-[11px] text-slate-500">Pasar Lama Tangerang</div>
                        </div>
                    </div>

                    <!-- Floating Badge 2 -->
                    <div class="absolute -bottom-5 -right-5 bg-white/95 backdrop-blur-md px-5 py-3.5 rounded-2xl shadow-xl border border-slate-100 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-500 flex items-center justify-center font-bold text-lg">
                            ✓
                        </div>
                        <div>
                            <div class="text-xs font-extrabold text-slate-800">Fresh Daily</div>
                            <div class="text-[11px] text-slate-500">Bihun Beras &amp; Santan Segar</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 3 Keunggulan Filosofi Kuliner -->
<section id="keunggulan" class="py-16 bg-white border-y border-slate-200/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="text-xs font-extrabold uppercase tracking-wider text-brand-600">Standardisasi Mutu Tinggi</span>
            <h2 class="text-3xl font-black font-heading text-slate-900 mt-1">Mengapa Laksa Benteng Carlendra Istimewa?</h2>
            <p class="text-sm text-slate-500 mt-2">Kami mempertahankan racikan bumbu pusaka sambil mengadopsi standar penyajian higienis modern.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="p-8 rounded-3xl bg-slate-50 hover:bg-sky-50/50 border border-slate-200/80 hover:border-brand-300 transition duration-300 group">
                <div class="w-14 h-14 rounded-2xl bg-brand-500 text-white flex items-center justify-center mb-6 shadow-glow group-hover:scale-110 transition duration-300">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                </div>
                <h3 class="text-xl font-bold font-heading text-slate-900 mb-2">Bihun Beras Segar Alami</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Bukan bihun kering instan pabrikan. Bihun Laksa Benteng dibuat dari olahan tepung beras putih segar yang dikukus matang, bertekstur lembut, kenyal, dan mudah menyerap sari kuah kari.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="p-8 rounded-3xl bg-slate-50 hover:bg-sky-50/50 border border-slate-200/80 hover:border-brand-300 transition duration-300 group">
                <div class="w-14 h-14 rounded-2xl bg-amber-500 text-white flex items-center justify-center mb-6 shadow-glow group-hover:scale-110 transition duration-300">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path></svg>
                </div>
                <h3 class="text-xl font-bold font-heading text-slate-900 mb-2">Kuah Santan Rempah Kuning</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Kombinasi kaldu ayam kampung rebusan lambat, kunyit bakar, lengkuas, dan santan kelapa murni menghasilkan kuah kuning keemasan yang gurih beraroma mendalam tanpa enek.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="p-8 rounded-3xl bg-slate-50 hover:bg-sky-50/50 border border-slate-200/80 hover:border-brand-300 transition duration-300 group">
                <div class="w-14 h-14 rounded-2xl bg-sky-600 text-white flex items-center justify-center mb-6 shadow-glow group-hover:scale-110 transition duration-300">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                </div>
                <h3 class="text-xl font-bold font-heading text-slate-900 mb-2">Serundeng Emas &amp; Daun Kesum</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Ciri pembeda otentik Banten: taburan kelapa parut sangrai kering bercita rasa manis-gurih dan kesegaran daun kesum yang memberikan sensasi aroma rempah yang tak terlupakan.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Interactive Menu Section (Fitur Filter & Fitur Sorting) -->
<section id="menu" class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10">
            <div>
                <span class="text-xs font-extrabold uppercase tracking-wider text-brand-600">Katalog Makanan Autentik</span>
                <h2 class="text-3xl sm:text-4xl font-black font-heading text-slate-900 mt-1">Daftar Menu Laksa Benteng</h2>
                <p class="text-sm text-slate-500 mt-1">Gunakan filter kategori dan pengurutan harga untuk menemukan selera terbaik Anda.</p>
            </div>

            <!-- Counter Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-2xl bg-white border border-slate-200 shadow-sm text-xs font-bold text-slate-700">
                <span class="w-2.5 h-2.5 rounded-full bg-brand-500"></span>
                <span>Menampilkan <strong class="text-brand-600"><?= $totalItems ?></strong> variasi hidangan</span>
            </div>
        </div>

        <!-- Filter & Sorting Control Panel -->
        <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200/80 shadow-sm mb-10">
            <form action="<?= base_url() ?>#menu" method="GET" class="space-y-6" id="filterForm">
                
                <!-- Search & Sort Row -->
                <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-center">
                    
                    <!-- Search Input -->
                    <div class="md:col-span-6 relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        <input type="text" name="search" value="<?= esc($searchQuery) ?>" placeholder="Cari menu (cth: Ayam Panggang, Seafood, Sultan, dsb)..." class="w-full pl-11 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-2xl text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition">
                    </div>

                    <!-- Fitur 2: Sorting Dropdown -->
                    <div class="md:col-span-4 relative">
                        <div class="flex items-center gap-2">
                            <label for="sort" class="text-xs font-bold text-slate-500 shrink-0 uppercase tracking-wider">Urutkan:</label>
                            <select name="sort" id="sort" onchange="document.getElementById('filterForm').submit()" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-2xl text-sm font-semibold text-slate-700 focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-500 transition">
                                <option value="favorite" <?= $selectedSort === 'favorite' ? 'selected' : '' ?>>⭐ Pilihan Rekomendasi Chef</option>
                                <option value="price_asc" <?= $selectedSort === 'price_asc' ? 'selected' : '' ?>>💰 Harga: Termurah ke Termahal</option>
                                <option value="price_desc" <?= $selectedSort === 'price_desc' ? 'selected' : '' ?>>💎 Harga: Termahal ke Termurah</option>
                                <option value="name_asc" <?= $selectedSort === 'name_asc' ? 'selected' : '' ?>>🔤 Nama Menu: A - Z</option>
                                <option value="rating_desc" <?= $selectedSort === 'rating_desc' ? 'selected' : '' ?>>🔥 Rating Terpopuler</option>
                            </select>
                        </div>
                    </div>

                    <!-- Submit & Reset Buttons -->
                    <div class="md:col-span-2 flex items-center gap-2">
                        <button type="submit" class="w-full py-3 px-4 rounded-2xl bg-brand-500 hover:bg-brand-600 text-white font-bold text-xs shadow-md shadow-brand-500/25 transition">
                            Terapkan
                        </button>
                        <?php if ($selectedKategori !== 'all' || $selectedSort !== 'favorite' || !empty($searchQuery) || $selectedPedas !== 'all'): ?>
                            <a href="<?= base_url() ?>#menu" class="py-3 px-3 rounded-2xl bg-slate-100 hover:bg-slate-200 text-slate-600 text-xs font-bold transition" title="Reset Filter">
                                ✕
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Fitur 1: Filter Kategori & Kepedasan (Tabs) -->
                <div class="pt-4 border-t border-slate-100 space-y-4">
                    <!-- Kategori Badges -->
                    <div>
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block mb-2">Kategori Hidangan:</span>
                        <div class="flex flex-wrap gap-2">
                            <a href="<?= base_url('?kategori=all&sort=' . $selectedSort . '&pedas=' . $selectedPedas) ?>#menu" class="px-4 py-2 rounded-xl text-xs font-bold transition <?= $selectedKategori === 'all' ? 'bg-brand-500 text-white shadow-md shadow-brand-500/20' : 'bg-slate-100 hover:bg-slate-200 text-slate-700' ?>">
                                Semua Menu (Semua)
                            </a>
                            <?php foreach ($categories as $cat): ?>
                                <a href="<?= base_url('?kategori=' . urlencode($cat['kategori']) . '&sort=' . $selectedSort . '&pedas=' . $selectedPedas) ?>#menu" class="px-4 py-2 rounded-xl text-xs font-bold transition <?= $selectedKategori === $cat['kategori'] ? 'bg-brand-500 text-white shadow-md shadow-brand-500/20' : 'bg-slate-100 hover:bg-slate-200 text-slate-700' ?>">
                                    <?= esc($cat['kategori']) ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Kepedasan Filter Badges -->
                    <div>
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block mb-2">Level Kepedasan:</span>
                        <div class="flex flex-wrap gap-2">
                            <a href="<?= base_url('?kategori=' . urlencode($selectedKategori) . '&sort=' . $selectedSort . '&pedas=all') ?>#menu" class="px-3.5 py-1.5 rounded-lg text-xs font-semibold transition <?= $selectedPedas === 'all' ? 'bg-slate-800 text-white' : 'bg-slate-100 hover:bg-slate-200 text-slate-600' ?>">
                                Semua Tingkat
                            </a>
                            <a href="<?= base_url('?kategori=' . urlencode($selectedKategori) . '&sort=' . $selectedSort . '&pedas=0') ?>#menu" class="px-3.5 py-1.5 rounded-lg text-xs font-semibold transition <?= $selectedPedas === '0' ? 'bg-slate-800 text-white' : 'bg-slate-100 hover:bg-slate-200 text-slate-600' ?>">
                                Level 0 (Non-pedas)
                            </a>
                            <a href="<?= base_url('?kategori=' . urlencode($selectedKategori) . '&sort=' . $selectedSort . '&pedas=1') ?>#menu" class="px-3.5 py-1.5 rounded-lg text-xs font-semibold transition <?= $selectedPedas === '1' ? 'bg-slate-800 text-white' : 'bg-slate-100 hover:bg-slate-200 text-slate-600' ?>">
                                Level 1 (Sedang)
                            </a>
                            <a href="<?= base_url('?kategori=' . urlencode($selectedKategori) . '&sort=' . $selectedSort . '&pedas=2') ?>#menu" class="px-3.5 py-1.5 rounded-lg text-xs font-semibold transition <?= $selectedPedas === '2' ? 'bg-slate-800 text-white' : 'bg-slate-100 hover:bg-slate-200 text-slate-600' ?>">
                                Level 2 (Pedas Benteng)
                            </a>
                            <a href="<?= base_url('?kategori=' . urlencode($selectedKategori) . '&sort=' . $selectedSort . '&pedas=3') ?>#menu" class="px-3.5 py-1.5 rounded-lg text-xs font-semibold transition <?= $selectedPedas === '3' ? 'bg-slate-800 text-white' : 'bg-slate-100 hover:bg-slate-200 text-slate-600' ?>">
                                Level 3 (Ekstra Rawit 🔥)
                            </a>
                        </div>
                    </div>
                </div>

            </form>
        </div>

        <!-- Menu Grid -->
        <?php if (empty($menus)): ?>
            <div class="bg-white rounded-3xl p-12 text-center border border-slate-200">
                <div class="w-16 h-16 rounded-2xl bg-amber-50 text-amber-500 flex items-center justify-center mx-auto mb-4 text-2xl">
                    🔍
                </div>
                <h3 class="text-xl font-bold font-heading text-slate-900">Tidak ada hidangan yang cocok</h3>
                <p class="text-sm text-slate-500 mt-1 max-w-md mx-auto">Silakan coba ganti kata kunci pencarian atau ubah filter kategori dan tingkat kepedasan Anda.</p>
                <a href="<?= base_url() ?>#menu" class="mt-4 inline-block px-5 py-2.5 rounded-xl bg-brand-500 text-white text-xs font-bold hover:bg-brand-600 transition">
                    Tampilkan Semua Menu
                </a>
            </div>
        <?php else: ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 sm:gap-8">
                <?php foreach ($menus as $m): ?>
                    <div class="bg-white rounded-3xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between group">
                        <div>
                            <!-- Thumbnail with Badges -->
                            <div class="aspect-[4/3] bg-slate-100 relative overflow-hidden">
                                <?php 
                                    $imgSrc = base_url('images/' . $m['gambar']);
                                    if (file_exists(FCPATH . 'uploads/' . $m['gambar'])) {
                                        $imgSrc = base_url('uploads/' . $m['gambar']);
                                    }
                                ?>
                                <img src="<?= $imgSrc ?>" alt="<?= esc($m['nama']) ?>" class="w-full h-full object-cover group-hover:scale-110 transition duration-700" onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=500&q=80'">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent opacity-60 group-hover:opacity-40 transition"></div>

                                <!-- Kategori Badge Top-Left -->
                                <span class="absolute top-3.5 left-3.5 px-3 py-1 rounded-xl text-[11px] font-extrabold bg-white/95 backdrop-blur-md text-brand-700 shadow-md">
                                    <?= esc($m['kategori']) ?>
                                </span>

                                <!-- Favorite / Best Seller Badge -->
                                <?php if ($m['is_favorite']): ?>
                                    <span class="absolute top-3.5 right-3.5 px-2.5 py-1 rounded-xl text-[11px] font-bold bg-amber-500 text-white shadow-md flex items-center gap-1">
                                        ★ Favorit
                                    </span>
                                <?php endif; ?>

                                <!-- Spice Level Badge Bottom-Left -->
                                <div class="absolute bottom-3 left-3.5 flex items-center gap-1.5">
                                    <?php if ($m['level_pedas'] > 0): ?>
                                        <span class="px-2 py-0.5 rounded-lg text-[10px] font-extrabold bg-rose-600/90 text-white backdrop-blur-sm shadow">
                                            🔥 Lvl <?= $m['level_pedas'] ?>
                                        </span>
                                    <?php else: ?>
                                        <span class="px-2 py-0.5 rounded-lg text-[10px] font-semibold bg-slate-800/80 text-slate-200 backdrop-blur-sm">
                                            Non-pedas
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <!-- Rating Bottom-Right -->
                                <div class="absolute bottom-3 right-3.5 px-2 py-0.5 rounded-lg text-[11px] font-bold bg-slate-900/80 text-amber-400 backdrop-blur-sm flex items-center gap-1">
                                    <span>★</span> <?= number_format($m['rating'], 1) ?>
                                </div>
                            </div>

                            <!-- Content Details -->
                            <div class="p-5">
                                <h3 class="font-heading font-extrabold text-base sm:text-lg text-slate-900 group-hover:text-brand-600 transition line-clamp-1">
                                    <a href="<?= base_url('menu/' . $m['id']) ?>">
                                        <?= esc($m['nama']) ?>
                                    </a>
                                </h3>

                                <p class="text-xs text-slate-500 mt-2 line-clamp-2 leading-relaxed">
                                    <?= esc($m['deskripsi']) ?>
                                </p>
                            </div>
                        </div>

                        <!-- Card Footer -->
                        <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-between gap-3">
                            <div>
                                <span class="text-[10px] uppercase tracking-wider text-slate-400 font-bold block">Harga</span>
                                <span class="font-heading font-black text-lg text-brand-600">
                                    Rp <?= number_format($m['harga'], 0, ',', '.') ?>
                                </span>
                            </div>

                            <a href="<?= base_url('menu/' . $m['id']) ?>" class="px-4 py-2.5 rounded-xl bg-slate-900 hover:bg-brand-500 text-white text-xs font-bold transition shadow-sm hover:shadow-brand-500/25 flex items-center gap-1.5">
                                <span>Detail</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>
</section>

<!-- Sejarah & Filosofi Kuliner (Storytelling Section) -->
<section id="filosofi" class="py-20 bg-white border-t border-slate-200/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-6 space-y-6">
                <span class="text-xs font-extrabold uppercase tracking-wider text-brand-600">Jejak Sejarah Kuliner Banten</span>
                <h2 class="text-3xl sm:text-4xl font-black font-heading text-slate-900 tracking-tight leading-snug">
                    Warisan Akulturasi Budaya di Balik Semangkuk Laksa Benteng
                </h2>
                <p class="text-sm sm:text-base text-slate-600 leading-relaxed">
                    Laksa Benteng berakar dari perpaduan harmonis antara budaya Tionghoa Peranakan (Cina Benteng) dan masyarakat lokal Banten di tepian Sungai Cisadane sejak ratusan tahun silam. Nama <em>"Benteng"</em> merujuk pada benteng pertahanan Belanda yang dahulu berdiri kokoh di Tangerang.
                </p>
                <p class="text-sm sm:text-base text-slate-600 leading-relaxed">
                    Berbeda dengan laksa Bogor atau laksa Betawi yang menggunakan oncom atau ketupat, Laksa Benteng wajib menggunakan mie berbahan tepung beras putih yang disiram kuah santan kuning kaya kunyit, taburan serundeng kelapa sangrai, serta daun kesum wangi.
                </p>

                <div class="p-5 rounded-2xl bg-brand-50/70 border border-brand-200">
                    <p class="text-xs font-semibold text-brand-900 italic">
                        "Restoran Carlendra berdedikasi menjaga resep otentik ini tetap murni, higienis, dan hadir dengan pengalaman kuliner modern yang membanggakan Provinsi Banten."
                    </p>
                    <span class="text-xs font-bold text-brand-600 block mt-2">&mdash; Lionel Carlendra, Pendiri</span>
                </div>
            </div>

            <div class="lg:col-span-6">
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-4">
                        <div class="rounded-3xl overflow-hidden shadow-md aspect-square bg-slate-100">
                            <img src="<?= base_url('images/laksa-original.jpg') ?>" alt="Kuah Laksa Benteng" class="w-full h-full object-cover hover:scale-105 transition duration-500" onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=400&q=80'">
                        </div>
                        <div class="p-6 rounded-3xl bg-slate-900 text-white">
                            <span class="text-2xl font-black font-heading text-brand-400">#0EA5E9</span>
                            <p class="text-xs text-slate-300 mt-1">Warna Utama mewakili kejernihan pesisir &amp; inovasi modern.</p>
                        </div>
                    </div>

                    <div class="space-y-4 pt-8">
                        <div class="p-6 rounded-3xl bg-brand-500 text-white shadow-glow">
                            <span class="text-2xl font-black font-heading text-white">#F8FAFC</span>
                            <p class="text-xs text-white/90 mt-1">Warna Aksen mewakili kebersihan bihun tepung beras putih murni.</p>
                        </div>
                        <div class="rounded-3xl overflow-hidden shadow-md aspect-square bg-slate-100">
                            <img src="<?= base_url('images/laksa-seafood.jpg') ?>" alt="Laksa Seafood" class="w-full h-full object-cover hover:scale-105 transition duration-500" onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1569718212165-3a8278d5f624?auto=format&fit=crop&w=400&q=80'">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Floating Back to Top Button -->
<a href="#beranda" class="fixed bottom-6 right-6 z-40 p-3.5 rounded-2xl bg-brand-500 hover:bg-brand-600 text-white shadow-xl shadow-brand-500/30 transition transform hover:-translate-y-1 active:scale-95 flex items-center justify-center" title="Kembali ke atas">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
</a>

<?= $this->endSection() ?>
