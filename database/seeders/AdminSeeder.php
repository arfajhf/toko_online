<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'nama' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'no_hp' => '081234567890',
            'role' => 'admin',
        ]);

        Admin::create([
            'nama' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('user'),
            'no_hp' => '081234567890',
            'role' => 'user',
        ]);

        Admin::create([
            'nama' => 'Pimpinan',
            'email' => 'pimpinan@pimpinan.com',
            'password' => bcrypt('pimpinan'),
            'no_hp' => '081234567890',
            'role' => 'pimpinan',
        ]);
    }
}
