<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username'   => 'admin',
                'email'      => 'admin@carlendra.com',
                'password'   => password_hash('admin123', PASSWORD_DEFAULT),
                'name'       => 'Lionel Carlendra (Admin)',
                'role'       => 'admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Kosongkan tabel jika ada data lama lalu insert
        $this->db->table('users')->truncate();
        $this->db->table('users')->insertBatch($data);
    }
}
