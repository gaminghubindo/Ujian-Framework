<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table            = 'menus';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nama',
        'slug',
        'kategori',
        'harga',
        'deskripsi',
        'komposisi',
        'level_pedas',
        'rating',
        'is_favorite',
        'gambar',
        'status',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation
    protected $validationRules = [
        'nama'      => 'required|min_length[3]|max_length[150]',
        'kategori'  => 'required',
        'harga'     => 'required|numeric|greater_than_equal_to[0]',
        'deskripsi' => 'required',
    ];

    /**
     * Dapatkan daftar kategori unik yang tersedia
     */
    public function getCategories(): array
    {
        return $this->select('kategori')
                    ->distinct()
                    ->orderBy('kategori', 'ASC')
                    ->findAll();
    }

    /**
     * Ambil menu dengan filter kategori, tingkat kepedasan, pencarian, dan sorting
     */
    public function getFilteredMenus(?string $kategori = null, ?string $sort = null, ?string $search = null, ?string $pedas = null): array
    {
        $builder = $this->builder();

        // Filter Kategori
        if (!empty($kategori) && $kategori !== 'all') {
            $builder->where('kategori', $kategori);
        }

        // Filter Kepedasan
        if ($pedas !== null && $pedas !== '' && $pedas !== 'all') {
            $builder->where('level_pedas', (int) $pedas);
        }

        // Filter Pencarian
        if (!empty($search)) {
            $builder->groupStart()
                    ->like('nama', $search)
                    ->orLike('deskripsi', $search)
                    ->orLike('komposisi', $search)
                    ->groupEnd();
        }

        // Fitur Sorting
        switch ($sort) {
            case 'price_asc':
                $builder->orderBy('harga', 'ASC');
                break;
            case 'price_desc':
                $builder->orderBy('harga', 'DESC');
                break;
            case 'name_asc':
                $builder->orderBy('nama', 'ASC');
                break;
            case 'name_desc':
                $builder->orderBy('nama', 'DESC');
                break;
            case 'rating_desc':
                $builder->orderBy('rating', 'DESC');
                break;
            default:
                // Default: Menu favorit dulu, kemudian ID terbaru
                $builder->orderBy('is_favorite', 'DESC')
                        ->orderBy('id', 'ASC');
                break;
        }

        return $builder->get()->getResultArray();
    }

    /**
     * Generate slug unik otomatis jika belum ada
     */
    public function makeSlug(string $nama, ?int $ignoreId = null): string
    {
        $slug = url_title($nama, '-', true);
        $baseSlug = $slug;
        $counter = 1;

        while (true) {
            $builder = $this->where('slug', $slug);
            if ($ignoreId) {
                $builder->where('id !=', $ignoreId);
            }
            if ($builder->countAllResults() === 0) {
                break;
            }
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }
}
