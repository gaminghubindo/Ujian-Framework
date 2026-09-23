<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

    <!-- Back button & Title -->
    <div class="mb-8">
        <a href="<?= base_url('admin/dashboard') ?>" class="inline-flex items-center gap-1.5 text-xs font-bold uppercase tracking-wider text-slate-500 hover:text-brand-600 transition mb-3">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Kembali ke Dashboard
        </a>
        <h1 class="text-2xl sm:text-3xl font-extrabold font-heading text-slate-900 tracking-tight">
            <?= $menu ? 'Edit Hidangan: ' . esc($menu['nama']) : 'Tambah Menu Baru' ?>
        </h1>
        <p class="text-sm text-slate-500 mt-1">Lengkapi informasi hidangan khas Laksa Benteng Carlendra di bawah ini.</p>
    </div>

    <!-- Error Summary if any -->
    <?php if (session()->getFlashdata('errors')): ?>
        <div class="p-4 mb-6 text-rose-800 border border-rose-300 rounded-2xl bg-rose-50 shadow-sm text-sm">
            <p class="font-bold mb-2">Terdapat beberapa kesalahan pengisian form:</p>
            <ul class="list-disc pl-5 space-y-1">
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <!-- Form Card -->
    <div class="bg-white rounded-3xl border border-slate-200/80 p-6 sm:p-10 shadow-sm">
        <?php $actionUrl = $menu ? base_url('admin/menu/update/' . $menu['id']) : base_url('admin/menu/store'); ?>
        <form action="<?= $actionUrl ?>" method="POST" enctype="multipart/form-data" class="space-y-6">
            <?= csrf_field() ?>

            <!-- Baris 1: Nama & Kategori -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="nama" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                        Nama Hidangan <span class="text-rose-500">*</span>
                    </label>
                    <input type="text" name="nama" id="nama" value="<?= old('nama', $menu['nama'] ?? '') ?>" required placeholder="Contoh: Laksa Benteng Ayam Kampung Panggang" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition">
                </div>

                <div>
                    <label for="kategori" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                        Kategori <span class="text-rose-500">*</span>
                    </label>
                    <select name="kategori" id="kategori" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition">
                        <?php 
                            $currCat = old('kategori', $menu['kategori'] ?? '');
                            $cats = ['Laksa Klasik', 'Laksa Spesial', 'Laksa Komplit', 'Laksa Seafood', 'Minuman Tradisional'];
                        ?>
                        <option value="" disabled <?= empty($currCat) ? 'selected' : '' ?>>Pilih Kategori</option>
                        <?php foreach ($cats as $cat): ?>
                            <option value="<?= $cat ?>" <?= $currCat === $cat ? 'selected' : '' ?>><?= $cat ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <!-- Baris 2: Harga & Level Pedas -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label for="harga" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                        Harga (Rupiah) <span class="text-rose-500">*</span>
                    </label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400 text-sm font-bold">Rp</span>
                        <input type="number" name="harga" id="harga" value="<?= old('harga', $menu['harga'] ?? '') ?>" required min="0" step="500" placeholder="25000" class="w-full pl-11 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition">
                    </div>
                </div>

                <div>
                    <label for="level_pedas" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                        Level Kepedasan
                    </label>
                    <?php $pedas = (int) old('level_pedas', $menu['level_pedas'] ?? 1); ?>
                    <select name="level_pedas" id="level_pedas" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition">
                        <option value="0" <?= $pedas === 0 ? 'selected' : '' ?>>0 - Tidak Pedas (Manis / Gurih)</option>
                        <option value="1" <?= $pedas === 1 ? 'selected' : '' ?>>1 - Sedang (Ramah Pemula)</option>
                        <option value="2" <?= $pedas === 2 ? 'selected' : '' ?>>2 - Pedas Khas Benteng</option>
                        <option value="3" <?= $pedas === 3 ? 'selected' : '' ?>>3 - Ekstra Pedas Cabai Rawit</option>
                    </select>
                </div>

                <div>
                    <label for="status" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                        Status Ketersediaan <span class="text-rose-500">*</span>
                    </label>
                    <?php $st = old('status', $menu['status'] ?? 'tersedia'); ?>
                    <select name="status" id="status" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition">
                        <option value="tersedia" <?= $st === 'tersedia' ? 'selected' : '' ?>>Tersedia (Ready)</option>
                        <option value="habis" <?= $st === 'habis' ? 'selected' : '' ?>>Habis (Sold Out)</option>
                    </select>
                </div>
            </div>

            <!-- Deskripsi Singkat -->
            <div>
                <label for="deskripsi" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                    Deskripsi Ringkas &amp; Cita Rasa <span class="text-rose-500">*</span>
                </label>
                <textarea name="deskripsi" id="deskripsi" rows="3" required placeholder="Jelaskan keistimewaan rasa, kuah kari santan, tekstur mie beras, dan keunikan menu ini..." class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition"><?= old('deskripsi', $menu['deskripsi'] ?? '') ?></textarea>
            </div>

            <!-- Komposisi Bahan Lengkap -->
            <div>
                <label for="komposisi" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                    Komposisi Bahan &amp; Bumbu Rempah
                </label>
                <textarea name="komposisi" id="komposisi" rows="2" placeholder="Contoh: Bihun tepung beras putih, kuah kaldu ayam kampung, kelapa sangrai (serundeng), daun kesum, emping melinjo." class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition"><?= old('komposisi', $menu['komposisi'] ?? '') ?></textarea>
            </div>

            <!-- Upload / Input Foto Gambar -->
            <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200/80">
                <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-3">Foto Menu Hidangan</label>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
                    <div>
                        <label class="block text-xs text-slate-500 mb-1">Upload File Gambar Baru</label>
                        <input type="file" name="gambar_file" accept="image/*" class="block w-full text-xs text-slate-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-brand-50 file:text-brand-700 hover:file:bg-brand-100 cursor-pointer">
                    </div>
                    <div>
                        <label class="block text-xs text-slate-500 mb-1">Atau Nama File Preset / URL Gambar</label>
                        <input type="text" name="gambar_url" value="<?= old('gambar_url', $menu['gambar'] ?? 'laksa-original.jpg') ?>" placeholder="laksa-original.jpg" class="w-full px-3.5 py-2 bg-white border border-slate-200 rounded-xl text-xs focus:ring-2 focus:ring-brand-500 focus:outline-none">
                    </div>
                </div>
            </div>

            <!-- Rating & Flag Favorit -->
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pt-2">
                <div class="flex items-center gap-3">
                    <label for="rating" class="text-xs font-bold uppercase tracking-wider text-slate-700">Rating Default:</label>
                    <input type="number" name="rating" id="rating" min="1" max="5" step="0.1" value="<?= old('rating', $menu['rating'] ?? 4.8) ?>" class="w-20 px-3 py-1.5 bg-slate-50 border border-slate-200 rounded-xl text-xs font-bold focus:ring-2 focus:ring-brand-500 focus:outline-none text-center">
                </div>

                <div class="flex items-center gap-2">
                    <input type="checkbox" name="is_favorite" id="is_favorite" value="1" <?= (!empty($menu['is_favorite']) || old('is_favorite')) ? 'checked' : '' ?> class="w-4 h-4 text-brand-600 rounded border-slate-300 focus:ring-brand-500 cursor-pointer">
                    <label for="is_favorite" class="text-xs font-bold text-slate-700 cursor-pointer select-none">
                        Tandai sebagai Menu Favorit (Rekomendasi Chef)
                    </label>
                </div>
            </div>

            <!-- Submit & Cancel Buttons -->
            <div class="pt-6 border-t border-slate-100 flex items-center justify-end gap-3">
                <a href="<?= base_url('admin/dashboard') ?>" class="px-5 py-2.5 rounded-xl border border-slate-200 bg-white text-slate-600 hover:bg-slate-50 text-sm font-semibold transition">
                    Batal
                </a>
                <button type="submit" class="px-6 py-2.5 rounded-xl bg-brand-500 hover:bg-brand-600 text-white text-sm font-bold shadow-lg shadow-brand-500/25 transition transform active:scale-95">
                    <?= $menu ? 'Simpan Perubahan' : 'Tambahkan Menu' ?>
                </button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
