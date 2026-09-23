<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

    <!-- Breadcrumb -->
    <nav class="flex items-center gap-2 text-xs font-semibold text-slate-500 mb-8">
        <a href="<?= base_url() ?>" class="hover:text-brand-600 transition">Beranda</a>
        <span class="text-slate-400">/</span>
        <a href="<?= base_url() ?>#menu" class="hover:text-brand-600 transition">Katalog Laksa</a>
        <span class="text-slate-400">/</span>
        <span class="text-slate-800 font-bold"><?= esc($menu['nama']) ?></span>
    </nav>

    <!-- Main Detail Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">
        
        <!-- Left Column: Gallery & Culinary Story -->
        <div class="lg:col-span-6 space-y-6">
            <!-- Big Image Container -->
            <div class="aspect-[4/3] rounded-3xl bg-slate-900 overflow-hidden border-2 border-white shadow-2xl relative group">
                <?php 
                    $imgSrc = base_url('images/' . $menu['gambar']);
                    if (file_exists(FCPATH . 'uploads/' . $menu['gambar'])) {
                        $imgSrc = base_url('uploads/' . $menu['gambar']);
                    }
                ?>
                <img src="<?= $imgSrc ?>" alt="<?= esc($menu['nama']) ?>" class="w-full h-full object-cover group-hover:scale-105 transition duration-700" onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=800&q=80'">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>

                <!-- Badges -->
                <div class="absolute top-4 left-4 flex items-center gap-2">
                    <span class="px-3.5 py-1.5 rounded-xl text-xs font-black bg-white/95 text-brand-700 shadow-md">
                        <?= esc($menu['kategori']) ?>
                    </span>
                    <?php if ($menu['is_favorite']): ?>
                        <span class="px-3.5 py-1.5 rounded-xl text-xs font-bold bg-amber-500 text-white shadow-md flex items-center gap-1">
                            ★ Rekomendasi Chef Carlendra
                        </span>
                    <?php endif; ?>
                </div>

                <!-- Floating Caption at Bottom -->
                <div class="absolute bottom-4 left-4 right-4 text-white">
                    <div class="flex items-center justify-between text-xs">
                        <span class="font-bold flex items-center gap-1">
                            <span class="w-2 h-2 rounded-full bg-emerald-400"></span> Kuliner Tradisional Banten
                        </span>
                        <span class="text-slate-300">Foto Otentik Hidangan</span>
                    </div>
                </div>
            </div>

            <!-- Culinary Highlights Bar -->
            <div class="grid grid-cols-3 gap-4 text-center">
                <div class="p-4 rounded-2xl bg-white border border-slate-200/80 shadow-sm">
                    <span class="text-[10px] uppercase font-bold text-slate-400 block tracking-wider">Tingkat Pedas</span>
                    <span class="text-sm font-black text-rose-600 mt-1 block">
                        <?= $menu['level_pedas'] > 0 ? '🔥 Level ' . $menu['level_pedas'] : 'Non-pedas' ?>
                    </span>
                </div>
                <div class="p-4 rounded-2xl bg-white border border-slate-200/80 shadow-sm">
                    <span class="text-[10px] uppercase font-bold text-slate-400 block tracking-wider">Rating Tamu</span>
                    <span class="text-sm font-black text-amber-500 mt-1 block">
                        ★ <?= number_format($menu['rating'], 1) ?> / 5.0
                    </span>
                </div>
                <div class="p-4 rounded-2xl bg-white border border-slate-200/80 shadow-sm">
                    <span class="text-[10px] uppercase font-bold text-slate-400 block tracking-wider">Ketersediaan</span>
                    <span class="text-sm font-black <?= $menu['status'] === 'tersedia' ? 'text-emerald-600' : 'text-rose-600' ?> mt-1 block">
                        <?= ucfirst($menu['status']) ?>
                    </span>
                </div>
            </div>

            <!-- Heritage & Nutritional Facts Card -->
            <div class="p-6 rounded-3xl bg-white border border-slate-200/80 shadow-sm space-y-4">
                <h4 class="text-sm font-extrabold font-heading text-slate-900 flex items-center gap-2">
                    <svg class="w-5 h-5 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Fakta Kuliner &amp; Ciri Khas Benteng
                </h4>
                <div class="grid grid-cols-2 gap-4 text-xs text-slate-600">
                    <div class="p-3 rounded-xl bg-slate-50 border border-slate-100">
                        <strong class="text-slate-900 block mb-1">Mie Beras Khas:</strong>
                        Dibuat tanpa bahan pengawet dari beras murni dengan proses kukus tradisional.
                    </div>
                    <div class="p-3 rounded-xl bg-slate-50 border border-slate-100">
                        <strong class="text-slate-900 block mb-1">Rempah Banten:</strong>
                        Kunyit bakar, lengkuas merah, daun kesum, dan kelapa sangrai alami.
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column: Interactive Order Simulator & Details -->
        <div class="lg:col-span-6 space-y-6">
            
            <!-- Title & Price Block -->
            <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200/80 shadow-sm space-y-4">
                <div>
                    <span class="inline-block px-3 py-1 rounded-full text-xs font-bold bg-brand-50 text-brand-600 border border-brand-200 mb-2">
                        Resep Warisan Laksa Benteng Carlendra
                    </span>
                    <h1 class="text-2xl sm:text-3xl lg:text-4xl font-black font-heading text-slate-900 tracking-tight">
                        <?= esc($menu['nama']) ?>
                    </h1>
                </div>

                <div class="flex items-baseline gap-3 pt-2 border-t border-slate-100">
                    <span class="text-3xl sm:text-4xl font-black font-heading text-brand-600" id="basePriceDisplay">
                        Rp <?= number_format($menu['harga'], 0, ',', '.') ?>
                    </span>
                    <span class="text-xs text-slate-400 font-semibold">/ porsi lengkap</span>
                </div>

                <!-- Deskripsi Lengkap -->
                <p class="text-sm text-slate-600 leading-relaxed pt-2">
                    <?= esc($menu['deskripsi']) ?>
                </p>

                <!-- Komposisi Bahan -->
                <?php if (!empty($menu['komposisi'])): ?>
                    <div class="p-4 rounded-2xl bg-sky-50/60 border border-brand-100 text-xs text-slate-700 space-y-1">
                        <strong class="text-brand-800 flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Racikan Rempah &amp; Bahan Utama:
                        </strong>
                        <p class="text-slate-600 leading-relaxed"><?= esc($menu['komposisi']) ?></p>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Interactive Portion & Customization Box (Fitur Tambahan) -->
            <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200/80 shadow-sm space-y-6">
                <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                    <h3 class="text-base font-extrabold font-heading text-slate-900 flex items-center gap-2">
                        <span>Kustomisasi &amp; Simulasi Pesanan</span>
                    </h3>
                    <span class="text-xs font-bold text-brand-600 bg-brand-50 px-2.5 py-1 rounded-lg">Kalkulator Langsung</span>
                </div>

                <!-- Quantity Selector -->
                <div class="flex items-center justify-between">
                    <div>
                        <span class="text-xs font-bold text-slate-700 block uppercase tracking-wider">Jumlah Porsi</span>
                        <span class="text-[11px] text-slate-400">Pilih porsi yang ingin dinikmati</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <button type="button" onclick="changeQty(-1)" class="w-10 h-10 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold flex items-center justify-center transition active:scale-95 text-lg">
                            -
                        </button>
                        <span id="qtyDisplay" class="w-8 text-center font-heading font-black text-lg text-slate-900">1</span>
                        <button type="button" onclick="changeQty(1)" class="w-10 h-10 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold flex items-center justify-center transition active:scale-95 text-lg">
                            +
                        </button>
                    </div>
                </div>

                <!-- Spice Level Selector -->
                <div>
                    <label class="text-xs font-bold text-slate-700 block uppercase tracking-wider mb-2">Pilihan Level Pedas</label>
                    <div class="grid grid-cols-4 gap-2">
                        <label class="cursor-pointer">
                            <input type="radio" name="spice_opt" value="Tidak Pedas" class="sr-only peer" checked onchange="updateCustomization()">
                            <div class="p-2.5 rounded-xl border border-slate-200 peer-checked:border-brand-500 peer-checked:bg-brand-50 text-center transition">
                                <span class="text-[11px] font-bold text-slate-700 peer-checked:text-brand-600 block">Level 0</span>
                                <span class="text-[10px] text-slate-400">Gurih Manis</span>
                            </div>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="spice_opt" value="Sedang (Level 1)" class="sr-only peer" onchange="updateCustomization()">
                            <div class="p-2.5 rounded-xl border border-slate-200 peer-checked:border-brand-500 peer-checked:bg-brand-50 text-center transition">
                                <span class="text-[11px] font-bold text-slate-700 peer-checked:text-brand-600 block">Level 1</span>
                                <span class="text-[10px] text-slate-400">Sedang</span>
                            </div>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="spice_opt" value="Pedas Benteng (Level 2)" class="sr-only peer" onchange="updateCustomization()">
                            <div class="p-2.5 rounded-xl border border-slate-200 peer-checked:border-brand-500 peer-checked:bg-brand-50 text-center transition">
                                <span class="text-[11px] font-bold text-slate-700 peer-checked:text-brand-600 block">Level 2</span>
                                <span class="text-[10px] text-slate-400">Pedas Asli</span>
                            </div>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="spice_opt" value="Ekstra Rawit (Level 3)" class="sr-only peer" onchange="updateCustomization()">
                            <div class="p-2.5 rounded-xl border border-slate-200 peer-checked:border-brand-500 peer-checked:bg-brand-50 text-center transition">
                                <span class="text-[11px] font-bold text-slate-700 peer-checked:text-brand-600 block">Level 3</span>
                                <span class="text-[10px] text-rose-500 font-bold">Nampol 🔥</span>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Add-ons / Toppings Extra -->
                <div>
                    <label class="text-xs font-bold text-slate-700 block uppercase tracking-wider mb-2">Topping Tambahan (Opsional)</label>
                    <div class="space-y-2">
                        <label class="flex items-center justify-between p-3 rounded-xl border border-slate-200 hover:bg-slate-50 cursor-pointer transition">
                            <div class="flex items-center gap-3">
                                <input type="checkbox" id="top_puyuh" value="4000" data-name="Telur Puyuh Rebus (2 btr)" onchange="calculateTotal()" class="w-4 h-4 text-brand-600 rounded border-slate-300 focus:ring-brand-500">
                                <span class="text-xs font-semibold text-slate-800">Sate Telur Puyuh Rebus (2 butir)</span>
                            </div>
                            <span class="text-xs font-bold text-slate-500">+Rp 4.000</span>
                        </label>
                        <label class="flex items-center justify-between p-3 rounded-xl border border-slate-200 hover:bg-slate-50 cursor-pointer transition">
                            <div class="flex items-center gap-3">
                                <input type="checkbox" id="top_serundeng" value="3000" data-name="Ekstra Kelapa Sangrai Serundeng" onchange="calculateTotal()" class="w-4 h-4 text-brand-600 rounded border-slate-300 focus:ring-brand-500">
                                <span class="text-xs font-semibold text-slate-800">Ekstra Kelapa Sangrai (Serundeng)</span>
                            </div>
                            <span class="text-xs font-bold text-slate-500">+Rp 3.000</span>
                        </label>
                        <label class="flex items-center justify-between p-3 rounded-xl border border-slate-200 hover:bg-slate-50 cursor-pointer transition">
                            <div class="flex items-center gap-3">
                                <input type="checkbox" id="top_emping" value="3000" data-name="Ekstra Emping Melinjo" onchange="calculateTotal()" class="w-4 h-4 text-brand-600 rounded border-slate-300 focus:ring-brand-500">
                                <span class="text-xs font-semibold text-slate-800">Ekstra Emping Melinjo Renyah</span>
                            </div>
                            <span class="text-xs font-bold text-slate-500">+Rp 3.000</span>
                        </label>
                    </div>
                </div>

                <!-- Total Estimasi -->
                <div class="p-4 rounded-2xl bg-slate-900 text-white flex items-center justify-between">
                    <div>
                        <span class="text-[11px] text-slate-400 uppercase tracking-wider block">Total Estimasi Biaya:</span>
                        <span class="text-2xl font-black font-heading text-brand-400" id="totalPriceDisplay">
                            Rp <?= number_format($menu['harga'], 0, ',', '.') ?>
                        </span>
                    </div>

                    <button type="button" onclick="proceedOrder()" class="px-5 py-3 rounded-xl bg-brand-500 hover:bg-brand-600 text-white font-bold text-xs shadow-md transition transform active:scale-95 flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                        <span>Pesan via WhatsApp</span>
                    </button>
                </div>

            </div>

        </div>

    </div>

    <!-- Related Menus Section -->
    <?php if (!empty($relatedMenus)): ?>
        <div class="mt-20 pt-10 border-t border-slate-200">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h3 class="text-2xl font-black font-heading text-slate-900">Pilihan Variasi Laksa Lainnya</h3>
                    <p class="text-xs text-slate-500 mt-1">Jelajahi variasi olahan rempah lain yang sepadan</p>
                </div>
                <a href="<?= base_url() ?>#menu" class="text-xs font-bold text-brand-600 hover:underline">Lihat Semua Menu &rarr;</a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($relatedMenus as $rm): ?>
                    <a href="<?= base_url('menu/' . $rm['id']) ?>" class="bg-white rounded-3xl p-5 border border-slate-200/80 hover:shadow-xl hover:-translate-y-1 transition duration-300 flex items-center gap-4 group">
                        <div class="w-20 h-20 rounded-2xl bg-slate-100 overflow-hidden shrink-0">
                            <?php 
                                $rmImg = base_url('images/' . $rm['gambar']);
                                if (file_exists(FCPATH . 'uploads/' . $rm['gambar'])) {
                                    $rmImg = base_url('uploads/' . $rm['gambar']);
                                }
                            ?>
                            <img src="<?= $rmImg ?>" alt="<?= esc($rm['nama']) ?>" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=200&q=80'">
                        </div>
                        <div>
                            <span class="text-[10px] font-bold text-brand-600 uppercase tracking-wider block"><?= esc($rm['kategori']) ?></span>
                            <h4 class="text-sm font-bold text-slate-900 group-hover:text-brand-600 transition line-clamp-1"><?= esc($rm['nama']) ?></h4>
                            <span class="text-xs font-black font-heading text-slate-900 mt-1 block">Rp <?= number_format($rm['harga'], 0, ',', '.') ?></span>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>

</div>

<!-- JavaScript Calculator Logic -->
<script>
    const basePrice = <?= (int) $menu['harga'] ?>;
    const menuTitle = "<?= esc($menu['nama']) ?>";
    let currentQty = 1;

    function changeQty(delta) {
        currentQty += delta;
        if (currentQty < 1) currentQty = 1;
        if (currentQty > 20) currentQty = 20;
        document.getElementById('qtyDisplay').innerText = currentQty;
        calculateTotal();
    }

    function calculateTotal() {
        let extra = 0;
        if (document.getElementById('top_puyuh')?.checked) extra += parseInt(document.getElementById('top_puyuh').value);
        if (document.getElementById('top_serundeng')?.checked) extra += parseInt(document.getElementById('top_serundeng').value);
        if (document.getElementById('top_emping')?.checked) extra += parseInt(document.getElementById('top_emping').value);

        const total = (basePrice + extra) * currentQty;
        document.getElementById('totalPriceDisplay').innerText = 'Rp ' + total.toLocaleString('id-ID');
    }

    function updateCustomization() {
        calculateTotal();
    }

    function proceedOrder() {
        const spiceChoice = document.querySelector('input[name="spice_opt"]:checked')?.value || 'Sedang';
        let toppings = [];
        if (document.getElementById('top_puyuh')?.checked) toppings.push("Telur Puyuh");
        if (document.getElementById('top_serundeng')?.checked) toppings.push("Ekstra Serundeng");
        if (document.getElementById('top_emping')?.checked) toppings.push("Ekstra Emping");

        const toppingStr = toppings.length > 0 ? toppings.join(', ') : 'Tanpa Topping Tambahan';
        const total = document.getElementById('totalPriceDisplay').innerText;

        const message = `Halo Restoran Laksa Benteng Carlendra,\n\nSaya ingin memesan menu:\n- *Menu:* ${menuTitle}\n- *Jumlah:* ${currentQty} Porsi\n- *Level Pedas:* ${spiceChoice}\n- *Topping:* ${toppingStr}\n- *Total Estimasi:* ${total}\n\nMohon konfirmasi ketersediaan pesanan saya. Terima kasih!`;

        const waUrl = "https://wa.me/?text=" + encodeURIComponent(message);
        window.open(waUrl, '_blank');
    }
</script>
<?= $this->endSection() ?>
