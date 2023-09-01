<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        date_default_timezone_set('asia/jakarta');
        $data = [
            'role' => 'Administrator',
            'username' => 'admin',
            'password' => password_hash('password', PASSWORD_BCRYPT),
            'status' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'modified_at' => date("Y-m-d H:i:s"),
        ];
        $this->db->table('ms_user')->insert($data);
    }
}
