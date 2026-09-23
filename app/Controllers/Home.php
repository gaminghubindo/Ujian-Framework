<?php

namespace App\Controllers;

use App\Models\MenuModel;

class Home extends BaseController
{
    protected $menuModel;

    public function __construct()
    {
        $this->menuModel = new MenuModel();
        helper(['url']);
    }

    public function index(): string
    {
        $kategori = $this->request->getGet('kategori');
        $sort     = $this->request->getGet('sort') ?? 'favorite';
        $search   = $this->request->getGet('search');
        $pedas    = $this->request->getGet('pedas');

        $menus = $this->menuModel->getFilteredMenus($kategori, $sort, $search, $pedas);
        $categories = $this->menuModel->getCategories();
        $favorites = $this->menuModel->where('is_favorite', 1)->where('status', 'tersedia')->findAll(3);

        return view('home/index', [
            'title'            => 'Laksa Benteng Carlendra - Kuliner Khas Banten Berstandar Modern',
            'menus'            => $menus,
            'categories'       => $categories,
            'favorites'        => $favorites,
            'selectedKategori' => $kategori ?? 'all',
            'selectedSort'     => $sort,
            'searchQuery'      => $search ?? '',
            'selectedPedas'    => $pedas ?? 'all',
            'totalItems'       => count($menus),
        ]);
    }
}
