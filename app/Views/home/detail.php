<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

    <!-- Breadcrumb -->
    <nav class="flex items-center gap-2 text-xs font-semibold text-slate-500 mb-6">
        <a href="<?= base_url() ?>" class="hover:text-brand-600 transition">Beranda</a>
        <span>/</span>
        <a href="<?= base_url() ?>#menu" class="hover:text-brand-600 transition">Daftar Menu</a>
        <span>/</span>
        <span class="text-slate-800 font-bold"><?= esc($menu['nama']) ?></span>
    </nav>

    <!-- Main Detail Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
        
        <!-- Left: Image Gallery -->
        <div class="lg:col-span-6 space-y-4">
            <div class="aspect-[4/3] rounded-3xl bg-slate-100 overflow-hidden border border-slate-200 shadow-lg relative">
                <?php 
                    $imgSrc = base_url('images/' . $menu['gambar']);
                    if (file_exists(FCPATH . 'uploads/' . $menu['gambar'])) {
                        $imgSrc = base_url('uploads/' . $menu['gambar']);
                    }
                ?>
                <img src="<?= $imgSrc ?>" alt="<?= esc($menu['nama']) ?>" class="w-full h-full object-cover" onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=800&q=80'">
                
                <span class="absolute top-4 left-4 px-3.5 py-1.5 rounded-xl text-xs font-black bg-white/95 text-brand-700 shadow-md">
                    <?= esc($menu['kategori']) ?>
                </span>

                <?php if ($menu['is_favorite']): ?>
                    <span class="absolute top-4 right-4 px-3 py-1.5 rounded-xl text-xs font-bold bg-amber-500 text-white shadow-md">
                        ★ Signature Chef
                    </span>
                <?php endif; ?>
            </div>

            <!-- Highlights -->
            <div class="grid grid-cols-3 gap-3 text-center">
                <div class="p-3.5 rounded-2xl bg-white border border-slate-200">
                    <span class="text-[10px] uppercase font-bold text-slate-400 block">Tingkat Pedas</span>
                    <span class="text-xs font-black text-rose-600 mt-0.5 block">
                        <?= $menu['level_pedas'] > 0 ? '🔥 Level ' . $menu['level_pedas'] : 'Non-pedas' ?>
                    </span>
                </div>
                <div class="p-3.5 rounded-2xl bg-white border border-slate-200">
                    <span class="text-[10px] uppercase font-bold text-slate-400 block">Rating Tamu</span>
                    <span class="text-xs font-black text-amber-500 mt-0.5 block">
                        ★ <?= number_format($menu['rating'], 1) ?> / 5.0
                    </span>
                </div>
                <div class="p-3.5 rounded-2xl bg-white border border-slate-200">
                    <span class="text-[10px] uppercase font-bold text-slate-400 block">Ketersediaan</span>
                    <span class="text-xs font-black <?= $menu['status'] === 'tersedia' ? 'text-emerald-600' : 'text-rose-600' ?> mt-0.5 block">
                        <?= ucfirst($menu['status']) ?>
                    </span>
                </div>
            </div>
        </div>

        <!-- Right: Information & Action -->
        <div class="lg:col-span-6 space-y-6">
            <div>
                <span class="text-xs font-bold text-brand-600 uppercase tracking-wider">Kuliner Khas Banten</span>
                <h1 class="text-3xl sm:text-4xl font-black font-heading text-slate-900 tracking-tight mt-1">
                    <?= esc($menu['nama']) ?>
                </h1>
                
                <div class="mt-4 flex items-baseline gap-3">
                    <span class="text-3xl sm:text-4xl font-black font-heading text-brand-600">
                        Rp <?= number_format($menu['harga'], 0, ',', '.') ?>
                    </span>
                    <span class="text-xs text-slate-400 font-medium">Porsi Lengkap Termasuk Kuah &amp; Serundeng</span>
                </div>
            </div>

            <!-- Deskripsi -->
            <div class="prose prose-slate max-w-none text-sm leading-relaxed text-slate-600">
                <p><?= esc($menu['deskripsi']) ?></p>
            </div>

            <!-- Komposisi Bahan -->
            <?php if (!empty($menu['komposisi'])): ?>
                <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200/80 space-y-2">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-800 flex items-center gap-2">
                        <svg class="w-4 h-4 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Komposisi &amp; Racikan Bahan:
                    </h4>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        <?= esc($menu['komposisi']) ?>
                    </p>
                </div>
            <?php endif; ?>

            <!-- Action Area / Order Simulator CTA -->
            <div class="pt-4 border-t border-slate-200 space-y-4">
                <div class="flex items-center gap-4">
                    <a href="https://wa.me/?text=Halo%20Restoran%20Laksa%20Benteng%20Carlendra,%20saya%20ingin%20memesan%20<?= urlencode($menu['nama']) ?>%20(Rp%20<?= number_format($menu['harga'], 0, ',', '.') ?>)" target="_blank" class="flex-1 py-4 px-6 rounded-2xl bg-brand-500 hover:bg-brand-600 text-white font-extrabold text-sm shadow-lg shadow-brand-500/25 transition text-center flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        <span>Pesan Menu Ini Sekarang</span>
                    </a>

                    <a href="<?= base_url() ?>#menu" class="px-5 py-4 rounded-2xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-sm transition">
                        Kembali
                    </a>
                </div>
            </div>
        </div>

    </div>

    <!-- Related Menus -->
    <?php if (!empty($relatedMenus)): ?>
        <div class="mt-20 pt-10 border-t border-slate-200">
            <h3 class="text-2xl font-black font-heading text-slate-900 mb-6">Variasi Lain Dalam Kategori Ini</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($relatedMenus as $rm): ?>
                    <a href="<?= base_url('menu/' . $rm['id']) ?>" class="bg-white rounded-2xl p-4 border border-slate-200/80 hover:shadow-lg transition flex items-center gap-4 group">
                        <div class="w-16 h-16 rounded-xl bg-slate-100 overflow-hidden shrink-0">
                            <?php 
                                $rmImg = base_url('images/' . $rm['gambar']);
                                if (file_exists(FCPATH . 'uploads/' . $rm['gambar'])) {
                                    $rmImg = base_url('uploads/' . $rm['gambar']);
                                }
                            ?>
                            <img src="<?= $rmImg ?>" alt="<?= esc($rm['nama']) ?>" class="w-full h-full object-cover group-hover:scale-105 transition" onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=200&q=80'">
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 group-hover:text-brand-600 transition line-clamp-1"><?= esc($rm['nama']) ?></h4>
                            <span class="text-xs font-bold text-brand-600 mt-1 block">Rp <?= number_format($rm['harga'], 0, ',', '.') ?></span>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>

</div>
<?= $this->endSection() ?>
