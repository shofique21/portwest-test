<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        $roles = [
            [
                'role_name' => 'CEO',
                'status' => 1
            ],
            [
                'role_name' => 'COO',
                'status' => 1
            ],
            [
                'role_name' => 'General Manager',
                'status' => 1
            ],
            [
                'role_name' => 'Manager',
                'status' => 1
            ],
            [
                'role_name' => 'Supervisior',
                'status' => 1
            ],
            [
                'role_name' => 'Staff',
                'status' => 1
            ]
        ];
        foreach ($roles as $key => $value) {
            Role::create($value);
        }
    }
}
