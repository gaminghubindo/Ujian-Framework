<?php

namespace App\Controllers;

use App\Models\MenuModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class MenuController extends BaseController
{
    protected $menuModel;

    public function __construct()
    {
        $this->menuModel = new MenuModel();
        helper(['url']);
    }

    public function detail($id)
    {
        $menu = is_numeric($id) ? $this->menuModel->find($id) : $this->menuModel->where('slug', $id)->first();

        if (!$menu) {
            throw PageNotFoundException::forPageNotFound('Menu kuliner tidak ditemukan.');
        }

        // Ambil hidangan terkait dalam kategori yang sama
        $relatedMenus = $this->menuModel->where('kategori', $menu['kategori'])
                                        ->where('id !=', $menu['id'])
                                        ->findAll(3);

        return view('home/detail', [
            'title'        => $menu['nama'] . ' - Laksa Benteng Carlendra',
            'menu'         => $menu,
            'relatedMenus' => $relatedMenus,
        ]);
    }
}
