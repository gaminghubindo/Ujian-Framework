<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Dashboard Persiapan Ujian Framework
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<?php
$dbConnected = false;
$dbName = config('Database')->default['database'] ?? 'db_ujian_framework';
$dbError = '';
$tableCount = 0;
try {
    $db = \Config\Database::connect();
    $db->initialize();
    if ($db->connID) {
        $dbConnected = true;
        $tables = $db->listTables();
        $tableCount = count($tables);
    }
} catch (\Throwable $e) {
    $dbError = $e->getMessage();
}
?>

<div class="space-y-8">
    <!-- Hero Banner -->
    <div class="bg-gradient-to-r from-blue-600 via-indigo-600 to-violet-700 rounded-3xl p-8 text-white shadow-xl shadow-indigo-100 relative overflow-hidden">
        <div class="relative z-10 max-w-3xl">
            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-white/20 backdrop-blur-md text-white mb-4">
                🎉 Status Persiapan: Siap Ujian
            </span>
            <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight">
                Persiapan Ujian Pemrograman Framework
            </h1>
            <p class="mt-3 text-blue-100 text-base sm:text-lg leading-relaxed">
                Project CodeIgniter 4, koneksi Database MySQL, template Tailwind CSS CDN, serta Git Repository telah berhasil dikonfigurasi dan siap digunakan.
            </p>
        </div>
        <div class="absolute -right-10 -bottom-10 w-64 h-64 bg-white/10 rounded-full blur-2xl pointer-events-none"></div>
    </div>

    <!-- Status Grid (4 Bagian Ketentuan) -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Card 1: CodeIgniter 4 -->
        <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 rounded-xl bg-orange-100 text-orange-600 flex items-center justify-center font-bold">
                        1
                    </div>
                    <div>
                        <h2 class="font-bold text-slate-800 text-lg">CodeIgniter 4</h2>
                        <span class="text-xs text-slate-400">Bagian 1: Persiapan CI4</span>
                    </div>
                </div>
                <span class="px-2.5 py-1 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-700">
                    Terinstal (v<?= \CodeIgniter\CodeIgniter::CI_VERSION ?>)
                </span>
            </div>
            <ul class="text-sm text-slate-600 space-y-2.5">
                <li class="flex items-center text-emerald-600">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    CI4 telah terinstal di komputer siswa
                </li>
                <li class="flex items-center text-emerald-600">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    Aplikasi berjalan via <code class="px-1.5 py-0.5 bg-slate-100 text-slate-800 rounded text-xs font-mono ml-1">php spark serve</code>
                </li>
                <li class="text-xs text-slate-500 pt-2 border-t border-slate-100">
                    💡 <em>Tidak perlu install ulang saat ujian. Seluruh fitur dibuat saat waktu ujian dimulai.</em>
                </li>
            </ul>
        </div>

        <!-- Card 2: Database MySQL -->
        <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center font-bold">
                        2
                    </div>
                    <div>
                        <h2 class="font-bold text-slate-800 text-lg">Database MySQL</h2>
                        <span class="text-xs text-slate-400">Bagian 2: Persiapan Database</span>
                    </div>
                </div>
                <?php if ($dbConnected): ?>
                    <span class="px-2.5 py-1 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-700">
                        Terhubung
                    </span>
                <?php else: ?>
                    <span class="px-2.5 py-1 rounded-full text-xs font-semibold bg-rose-100 text-rose-700">
                        Belum Terhubung
                    </span>
                <?php endif; ?>
            </div>
            <ul class="text-sm text-slate-600 space-y-2.5">
                <li class="flex items-center text-slate-700">
                    <span class="font-medium mr-1.5">Nama Database:</span>
                    <code class="px-2 py-0.5 bg-slate-100 text-indigo-700 rounded text-xs font-mono font-semibold"><?= esc($dbName) ?></code>
                </li>
                <li class="flex items-center <?= $tableCount === 0 ? 'text-emerald-600' : 'text-amber-600' ?>">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    Kondisi: <?= $tableCount === 0 ? 'Database kosong (Sesuai Ketentuan)' : $tableCount . ' tabel terdeteksi' ?>
                </li>
                <li class="text-xs text-slate-500 pt-2 border-t border-slate-100">
                    💡 <em>Struktur tabel wajib dibuat via <strong>migration</strong> selama ujian berlangsung.</em>
                </li>
            </ul>
        </div>

        <!-- Card 3: Tailwind CSS -->
        <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 rounded-xl bg-teal-100 text-teal-600 flex items-center justify-center font-bold">
                        3
                    </div>
                    <div>
                        <h2 class="font-bold text-slate-800 text-lg">Tailwind CSS (CDN)</h2>
                        <span class="text-xs text-slate-400">Bagian 3: Ketentuan Tampilan</span>
                    </div>
                </div>
                <span class="px-2.5 py-1 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-700">
                    Aktif via CDN
                </span>
            </div>
            <ul class="text-sm text-slate-600 space-y-2.5">
                <li class="flex items-center text-emerald-600">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    Script CDN terpasang di <code class="px-1.5 py-0.5 bg-slate-100 text-slate-800 rounded text-xs font-mono ml-1">app/Views/layouts/main.php</code>
                </li>
                <li class="text-slate-600 text-xs">
                    Tag yang digunakan:
                    <code class="block mt-1 p-2 bg-slate-900 text-teal-300 rounded-lg text-xs font-mono overflow-x-auto">
                        &lt;script src="https://cdn.tailwindcss.com"&gt;&lt;/script&gt;
                    </code>
                </li>
                <li class="text-xs text-slate-500 pt-2 border-t border-slate-100">
                    💡 <em>Tidak memerlukan Node.js / npm build. Fokus pada fungsi aplikasi & implementasi CI4.</em>
                </li>
            </ul>
        </div>

        <!-- Card 4: Git & GitHub -->
        <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 rounded-xl bg-purple-100 text-purple-600 flex items-center justify-center font-bold">
                        4
                    </div>
                    <div>
                        <h2 class="font-bold text-slate-800 text-lg">Git & GitHub</h2>
                        <span class="text-xs text-slate-400">Bagian 4: Ketentuan Version Control</span>
                    </div>
                </div>
                <span class="px-2.5 py-1 rounded-full text-xs font-semibold bg-indigo-100 text-indigo-700">
                    Wajib 4 Commit
                </span>
            </div>
            <ul class="text-sm text-slate-600 space-y-2.5">
                <li class="flex items-center text-emerald-600">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    Remote Origin terhubung ke GitHub
                </li>
                <li class="text-xs text-slate-600">
                    Total commit wajib saat ujian: <strong class="text-purple-700 font-semibold">Tepat 4 commit</strong> (1 commit tiap tahapan pengerjaan).
                </li>
                <li class="text-xs text-slate-500 pt-2 border-t border-slate-100">
                    💡 <em>Sebelum waktu ujian selesai, wajib jalankan <code class="px-1 py-0.5 bg-slate-100 rounded font-mono">git push origin main</code> dan kumpulkan link repo ke Google Form.</em>
                </li>
            </ul>
        </div>

    </div>

    <!-- Quick Reference Cheatsheet for Exam -->
    <div class="bg-slate-900 rounded-3xl p-6 sm:p-8 text-slate-200 shadow-xl">
        <h3 class="text-lg font-bold text-white mb-4 flex items-center">
            <span class="mr-2">⚡</span> Cheatsheet Perintah Spark & Git untuk Ujian
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-xs font-mono">
            <div class="bg-slate-800/80 p-4 rounded-xl border border-slate-700 space-y-2">
                <div class="text-indigo-400 font-semibold text-sm mb-1 font-sans">Perintah CodeIgniter 4 (Spark)</div>
                <div><span class="text-slate-400"># Jalankan server:</span><br><code class="text-emerald-400">php spark serve</code></div>
                <div><span class="text-slate-400"># Buat file migration tabel:</span><br><code class="text-emerald-400">php spark make:migration CreateNamaTabel</code></div>
                <div><span class="text-slate-400"># Jalankan migration:</span><br><code class="text-emerald-400">php spark migrate</code></div>
                <div><span class="text-slate-400"># Buat Model & Controller:</span><br><code class="text-emerald-400">php spark make:model NamaModel</code><br><code class="text-emerald-400">php spark make:controller NamaController</code></div>
            </div>

            <div class="bg-slate-800/80 p-4 rounded-xl border border-slate-700 space-y-2">
                <div class="text-purple-400 font-semibold text-sm mb-1 font-sans">Alur 4 Commit Git Selama Ujian</div>
                <div><span class="text-slate-400"># Commit 1 (Misal: Migration & Setup Database):</span><br><code class="text-amber-300">git add . ; git commit -m "Commit 1: Setup database dan migration"</code></div>
                <div><span class="text-slate-400"># Commit 2 (Misal: Model & Controller Fitur Utama):</span><br><code class="text-amber-300">git add . ; git commit -m "Commit 2: Implementasi Model dan Controller"</code></div>
                <div><span class="text-slate-400"># Commit 3 (Misal: Tampilan Views & Tailwind):</span><br><code class="text-amber-300">git add . ; git commit -m "Commit 3: Pembuatan tampilan views dengan Tailwind CSS"</code></div>
                <div><span class="text-slate-400"># Commit 4 (Final & Push ke GitHub):</span><br><code class="text-amber-300">git add . ; git commit -m "Commit 4: Penyelesaian fitur dan validasi"</code><br><code class="text-emerald-400">git push origin main</code></div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
