<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="min-h-[75vh] flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full">
        <!-- Card Container -->
        <div class="bg-white rounded-3xl p-8 sm:p-10 shadow-xl border border-slate-100 relative overflow-hidden">
            <!-- Decorative Glow -->
            <div class="absolute -top-12 -right-12 w-40 h-40 bg-brand-500/10 rounded-full blur-2xl pointer-events-none"></div>
            <div class="absolute -bottom-12 -left-12 w-40 h-40 bg-sky-400/10 rounded-full blur-2xl pointer-events-none"></div>

            <!-- Header -->
            <div class="text-center relative z-10 mb-8">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-tr from-brand-600 to-brand-400 text-white flex items-center justify-center mx-auto shadow-glow mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                </div>
                <h2 class="text-2xl font-extrabold font-heading text-slate-900 tracking-tight">Login Portal Admin</h2>
                <p class="text-xs text-slate-500 mt-1">Kelola variasi menu dan operasional Laksa Benteng Carlendra</p>
            </div>

            <!-- Demo Credential Note -->
            <div class="mb-6 p-3.5 rounded-2xl bg-brand-50 border border-brand-200 text-xs text-brand-900 flex items-start gap-2.5">
                <svg class="w-4 h-4 text-brand-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <div>
                    <span class="font-bold">Akun Penguji / Evaluasi:</span><br>
                    Username: <code class="bg-brand-100 px-1.5 py-0.5 rounded font-mono font-bold text-brand-700">admin</code> &bull; Password: <code class="bg-brand-100 px-1.5 py-0.5 rounded font-mono font-bold text-brand-700">admin123</code>
                </div>
            </div>

            <!-- Login Form -->
            <form action="<?= base_url('admin/login/auth') ?>" method="POST" class="space-y-5 relative z-10">
                <?= csrf_field() ?>

                <div>
                    <label for="username" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Username / Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        </div>
                        <input type="text" name="username" id="username" value="<?= old('username', 'admin') ?>" required class="w-full pl-11 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-800 placeholder-slate-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                        </div>
                        <input type="password" name="password" id="password" value="admin123" required class="w-full pl-11 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-800 placeholder-slate-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition">
                    </div>
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full py-3.5 px-4 rounded-xl bg-brand-500 hover:bg-brand-600 text-white font-bold text-sm shadow-lg shadow-brand-500/30 hover:shadow-brand-500/40 transition duration-200 flex items-center justify-center gap-2 transform active:scale-[0.99]">
                        <span>Masuk ke Panel Admin</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </button>
                </div>
            </form>

            <!-- Back to Home -->
            <div class="mt-6 text-center">
                <a href="<?= base_url() ?>" class="text-xs text-slate-500 hover:text-brand-600 font-semibold transition flex items-center justify-center gap-1">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Kembali ke Halaman Restoran
                </a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
