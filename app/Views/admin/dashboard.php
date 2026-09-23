<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

    <!-- Dashboard Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
        <div>
            <div class="flex items-center gap-2 text-xs font-semibold text-brand-600 uppercase tracking-wider mb-1">
                <span>Panel Manajemen</span>
                <span>&bull;</span>
                <span>Lionel Carlendra (#10)</span>
            </div>
            <h1 class="text-3xl font-extrabold font-heading text-slate-900 tracking-tight">Dashboard &amp; Manajemen Menu</h1>
            <p class="text-sm text-slate-500 mt-1">Kelola variasi hidangan Laksa Benteng, harga, ketersediaan, dan deskripsi produk.</p>
        </div>

        <div class="flex items-center gap-3">
            <a href="<?= base_url() ?>" target="_blank" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl border border-slate-300 bg-white text-slate-700 hover:bg-slate-50 text-sm font-semibold transition">
                <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                <span>Lihat Website</span>
            </a>
            <a href="<?= base_url('admin/menu/create') ?>" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-brand-500 hover:bg-brand-600 text-white text-sm font-bold shadow-lg shadow-brand-500/25 transition transform active:scale-95">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                <span>Tambah Menu Baru</span>
            </a>
        </div>
    </div>

    <!-- Metrics Stat Cards -->
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-8">
        <!-- Card 1: Total Menu -->
        <div class="bg-white rounded-2xl p-5 border border-slate-200/80 shadow-sm relative overflow-hidden">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Total Variasi</p>
                    <h3 class="text-3xl font-black font-heading text-slate-900 mt-1"><?= $totalMenu ?></h3>
                    <p class="text-xs text-emerald-600 font-semibold mt-1">Min. 8 variasi (Terpenuhi)</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-brand-50 text-brand-500 flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                </div>
            </div>
        </div>

        <!-- Card 2: Tersedia -->
        <div class="bg-white rounded-2xl p-5 border border-slate-200/80 shadow-sm relative overflow-hidden">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Siap Disajikan</p>
                    <h3 class="text-3xl font-black font-heading text-emerald-600 mt-1"><?= $totalTersedia ?></h3>
                    <p class="text-xs text-slate-500 mt-1">Status Tersedia</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-500 flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                </div>
            </div>
        </div>

        <!-- Card 3: Total Kategori -->
        <div class="bg-white rounded-2xl p-5 border border-slate-200/80 shadow-sm relative overflow-hidden">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Kategori Menu</p>
                    <h3 class="text-3xl font-black font-heading text-slate-900 mt-1"><?= $totalKategori ?></h3>
                    <p class="text-xs text-slate-500 mt-1">Klasik, Spesial, Sultan, dll</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-500 flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
                </div>
            </div>
        </div>

        <!-- Card 4: Rata-rata Harga -->
        <div class="bg-white rounded-2xl p-5 border border-slate-200/80 shadow-sm relative overflow-hidden">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Rata-rata Harga</p>
                    <h3 class="text-2xl font-black font-heading text-slate-900 mt-1">Rp <?= number_format($avgPrice, 0, ',', '.') ?></h3>
                    <p class="text-xs text-slate-500 mt-1">Rentang Terjangkau</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-sky-50 text-brand-600 flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Data Table Card -->
    <div class="bg-white rounded-3xl border border-slate-200/80 shadow-sm overflow-hidden">
        <div class="px-6 py-5 border-b border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
                <h3 class="text-lg font-bold font-heading text-slate-900">Katalog Makanan &amp; Minuman</h3>
                <p class="text-xs text-slate-500">Daftar lengkap seluruh sajian khas Laksa Benteng Carlendra</p>
            </div>
            <div class="flex items-center gap-3">
                <input type="text" id="adminMenuSearch" onkeyup="filterAdminTable()" placeholder="Cari menu di tabel..." class="px-3.5 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-500 transition">
                <span class="text-xs text-slate-400 whitespace-nowrap">
                    Total: <strong class="text-slate-800"><?= count($menus) ?></strong> item
                </span>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50/70 border-b border-slate-200/70 text-[11px] uppercase tracking-wider text-slate-500 font-bold">
                        <th class="py-3.5 px-4 text-center w-12">No</th>
                        <th class="py-3.5 px-4">Menu &amp; Foto</th>
                        <th class="py-3.5 px-4">Kategori</th>
                        <th class="py-3.5 px-4">Harga (Rp)</th>
                        <th class="py-3.5 px-4">Pedas &amp; Rating</th>
                        <th class="py-3.5 px-4 text-center">Status</th>
                        <th class="py-3.5 px-4 text-center w-32">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-sm">
                    <?php if (empty($menus)): ?>
                        <tr>
                            <td colspan="7" class="text-center py-12 text-slate-400">
                                <p class="font-medium">Belum ada menu yang ditambahkan.</p>
                                <a href="<?= base_url('admin/menu/create') ?>" class="mt-2 inline-block text-xs font-semibold text-brand-500 hover:underline">Tambah menu pertama</a>
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php $no = 1; foreach ($menus as $m): ?>
                            <tr class="hover:bg-slate-50/50 transition">
                                <!-- No -->
                                <td class="py-4 px-4 text-center text-xs font-semibold text-slate-400"><?= $no++ ?></td>

                                <!-- Image & Name -->
                                <td class="py-4 px-4">
                                    <div class="flex items-center gap-3.5">
                                        <div class="w-14 h-14 rounded-2xl bg-slate-100 border border-slate-200 overflow-hidden shrink-0 relative">
                                            <?php 
                                                $imgSrc = base_url('images/' . $m['gambar']);
                                                if (file_exists(FCPATH . 'uploads/' . $m['gambar'])) {
                                                    $imgSrc = base_url('uploads/' . $m['gambar']);
                                                }
                                            ?>
                                            <img src="<?= $imgSrc ?>" alt="<?= esc($m['nama']) ?>" class="w-full h-full object-cover" onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=200&q=80'">
                                            <?php if ($m['is_favorite']): ?>
                                                <span class="absolute top-1 right-1 w-2.5 h-2.5 bg-amber-400 rounded-full ring-2 ring-white"></span>
                                            <?php endif; ?>
                                        </div>
                                        <div>
                                            <a href="<?= base_url('menu/' . $m['id']) ?>" target="_blank" class="font-bold text-slate-900 hover:text-brand-600 transition block">
                                                <?= esc($m['nama']) ?>
                                            </a>
                                            <span class="text-xs text-slate-400 block mt-0.5 line-clamp-1 max-w-xs">
                                                <?= esc($m['deskripsi']) ?>
                                            </span>
                                        </div>
                                    </div>
                                </td>

                                <!-- Kategori -->
                                <td class="py-4 px-4">
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-semibold bg-sky-50 text-brand-700 border border-brand-200">
                                        <?= esc($m['kategori']) ?>
                                    </span>
                                </td>

                                <!-- Harga -->
                                <td class="py-4 px-4 font-bold font-heading text-slate-900">
                                    Rp <?= number_format($m['harga'], 0, ',', '.') ?>
                                </td>

                                <!-- Pedas & Rating -->
                                <td class="py-4 px-4">
                                    <div class="flex items-center gap-2">
                                        <?php if ($m['level_pedas'] > 0): ?>
                                            <span class="inline-flex items-center text-xs font-bold text-rose-600 bg-rose-50 px-2 py-0.5 rounded-md border border-rose-200">
                                                🔥 Lvl <?= $m['level_pedas'] ?>
                                            </span>
                                        <?php else: ?>
                                            <span class="text-xs text-slate-400">Non-pedas</span>
                                        <?php endif; ?>
                                        <span class="inline-flex items-center text-xs font-semibold text-amber-600">
                                            ⭐ <?= number_format($m['rating'], 1) ?>
                                        </span>
                                    </div>
                                </td>

                                <!-- Status -->
                                <td class="py-4 px-4 text-center">
                                    <?php if ($m['status'] === 'tersedia'): ?>
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200">
                                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Tersedia
                                        </span>
                                    <?php else: ?>
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-semibold bg-rose-50 text-rose-700 border border-rose-200">
                                            <span class="w-1.5 h-1.5 rounded-full bg-rose-500"></span> Habis
                                        </span>
                                    <?php endif; ?>
                                </td>

                                <!-- Aksi -->
                                <td class="py-4 px-4 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <a href="<?= base_url('admin/menu/edit/' . $m['id']) ?>" class="p-2 rounded-xl text-slate-600 hover:text-brand-600 hover:bg-brand-50 border border-slate-200 transition" title="Edit Menu">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                        </a>
                                        <a href="<?= base_url('admin/menu/delete/' . $m['id']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus menu \'<?= esc($m['nama']) ?>\'?')" class="p-2 rounded-xl text-slate-600 hover:text-rose-600 hover:bg-rose-50 border border-slate-200 transition" title="Hapus Menu">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
function filterAdminTable() {
    const input = document.getElementById('adminMenuSearch');
    const filter = input.value.toLowerCase();
    const rows = document.querySelectorAll('tbody tr');
    
    rows.forEach(row => {
        const text = row.innerText.toLowerCase();
        row.style.display = text.includes(filter) ? '' : 'none';
    });
}
</script>
<?= $this->endSection() ?>
