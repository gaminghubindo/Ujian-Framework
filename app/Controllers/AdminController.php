<?php

namespace App\Controllers;

use App\Models\MenuModel;

class AdminController extends BaseController
{
    protected $menuModel;

    public function __construct()
    {
        $this->menuModel = new MenuModel();
        helper(['form', 'url']);
    }

    public function index()
    {
        $menus = $this->menuModel->orderBy('id', 'DESC')->findAll();
        $totalMenu = count($menus);
        $totalTersedia = 0;
        $totalHarga = 0;
        $kategoriList = [];

        foreach ($menus as $m) {
            if ($m['status'] === 'tersedia') {
                $totalTersedia++;
            }
            $totalHarga += (int) $m['harga'];
            if (!in_array($m['kategori'], $kategoriList)) {
                $kategoriList[] = $m['kategori'];
            }
        }

        $avgPrice = $totalMenu > 0 ? round($totalHarga / $totalMenu) : 0;

        return view('admin/dashboard', [
            'title'         => 'Dashboard Admin - Laksa Benteng Carlendra',
            'menus'         => $menus,
            'totalMenu'     => $totalMenu,
            'totalTersedia' => $totalTersedia,
            'totalKategori' => count($kategoriList),
            'avgPrice'      => $avgPrice,
        ]);
    }

    public function create()
    {
        return view('admin/form', [
            'title'      => 'Tambah Menu Baru - Laksa Benteng Carlendra',
            'menu'       => null,
            'categories' => ['Laksa Klasik', 'Laksa Spesial', 'Laksa Komplit', 'Laksa Seafood', 'Minuman Tradisional'],
        ]);
    }

    public function store()
    {
        $rules = [
            'nama'        => 'required|min_length[3]|max_length[150]',
            'kategori'    => 'required',
            'harga'       => 'required|numeric|greater_than_equal_to[0]',
            'deskripsi'   => 'required',
            'level_pedas' => 'permit_empty|integer',
            'rating'      => 'permit_empty|decimal',
            'status'      => 'required|in_list[tersedia,habis]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                             ->withInput()
                             ->with('errors', $this->validator->getErrors());
        }

        $nama = $this->request->getPost('nama');
        $slug = $this->menuModel->makeSlug($nama);

        // Upload gambar jika ada
        $gambarName = 'laksa-original.jpg'; // default image
        $fileGambar = $this->request->getFile('gambar_file');
        if ($fileGambar && $fileGambar->isValid() && !$fileGambar->hasMoved()) {
            $newName = $fileGambar->getRandomName();
            $fileGambar->move(FCPATH . 'uploads', $newName);
            $gambarName = $newName;
        } elseif ($this->request->getPost('gambar_url')) {
            $gambarName = trim($this->request->getPost('gambar_url'));
        }

        $data = [
            'nama'        => $nama,
            'slug'        => $slug,
            'kategori'    => $this->request->getPost('kategori'),
            'harga'       => (int) $this->request->getPost('harga'),
            'deskripsi'   => $this->request->getPost('deskripsi'),
            'komposisi'   => $this->request->getPost('komposisi'),
            'level_pedas' => (int) ($this->request->getPost('level_pedas') ?? 1),
            'rating'      => (float) ($this->request->getPost('rating') ?? 4.8),
            'is_favorite' => $this->request->getPost('is_favorite') ? 1 : 0,
            'gambar'      => $gambarName,
            'status'      => $this->request->getPost('status'),
        ];

        $this->menuModel->insert($data);

        return redirect()->to(base_url('admin/dashboard'))
                         ->with('success', 'Menu "' . $nama . '" berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $menu = $this->menuModel->find($id);
        if (!$menu) {
            return redirect()->to(base_url('admin/dashboard'))
                             ->with('error', 'Menu tidak ditemukan.');
        }

        return view('admin/form', [
            'title'      => 'Edit Menu: ' . $menu['nama'],
            'menu'       => $menu,
            'categories' => ['Laksa Klasik', 'Laksa Spesial', 'Laksa Komplit', 'Laksa Seafood', 'Minuman Tradisional'],
        ]);
    }

    public function update($id)
    {
        $menu = $this->menuModel->find($id);
        if (!$menu) {
            return redirect()->to(base_url('admin/dashboard'))
                             ->with('error', 'Menu tidak ditemukan.');
        }

        $rules = [
            'nama'        => 'required|min_length[3]|max_length[150]',
            'kategori'    => 'required',
            'harga'       => 'required|numeric|greater_than_equal_to[0]',
            'deskripsi'   => 'required',
            'level_pedas' => 'permit_empty|integer',
            'rating'      => 'permit_empty|decimal',
            'status'      => 'required|in_list[tersedia,habis]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                             ->withInput()
                             ->with('errors', $this->validator->getErrors());
        }

        $nama = $this->request->getPost('nama');
        $slug = ($nama === $menu['nama']) ? $menu['slug'] : $this->menuModel->makeSlug($nama, $id);

        $gambarName = $menu['gambar'];
        $fileGambar = $this->request->getFile('gambar_file');
        if ($fileGambar && $fileGambar->isValid() && !$fileGambar->hasMoved()) {
            $newName = $fileGambar->getRandomName();
            $fileGambar->move(FCPATH . 'uploads', $newName);
            $gambarName = $newName;
        } elseif ($this->request->getPost('gambar_url')) {
            $gambarName = trim($this->request->getPost('gambar_url'));
        }

        $data = [
            'nama'        => $nama,
            'slug'        => $slug,
            'kategori'    => $this->request->getPost('kategori'),
            'harga'       => (int) $this->request->getPost('harga'),
            'deskripsi'   => $this->request->getPost('deskripsi'),
            'komposisi'   => $this->request->getPost('komposisi'),
            'level_pedas' => (int) ($this->request->getPost('level_pedas') ?? 1),
            'rating'      => (float) ($this->request->getPost('rating') ?? 4.8),
            'is_favorite' => $this->request->getPost('is_favorite') ? 1 : 0,
            'gambar'      => $gambarName,
            'status'      => $this->request->getPost('status'),
        ];

        $this->menuModel->update($id, $data);

        return redirect()->to(base_url('admin/dashboard'))
                         ->with('success', 'Menu "' . $nama . '" berhasil diperbarui!');
    }

    public function delete($id)
    {
        $menu = $this->menuModel->find($id);
        if (!$menu) {
            return redirect()->to(base_url('admin/dashboard'))
                             ->with('error', 'Menu tidak ditemukan.');
        }

        $this->menuModel->delete($id);

        return redirect()->to(base_url('admin/dashboard'))
                         ->with('success', 'Menu "' . $menu['nama'] . '" berhasil dihapus.');
    }
}
