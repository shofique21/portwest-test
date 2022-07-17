<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserDepartmentRole;
class UserDepartmentRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserDepartmentRole::truncate();
        $user = [
            [
                'department_id' => 1,
                'role_id' =>1,
                'user_id' => 1,
            ],
            [
                'department_id' => 1,
                'role_id' => 2,
                'user_id' => 2,
            ],
            [
                'department_id' => 1,
                'role_id' => 3,
                'user_id' => 3,
            ],
            [
                'department_id' => 1,
                'role_id' => 4,
                'user_id' => 4,
            ],
            [
                'department_id' => 1,
                'role_id' => 5,
                'user_id' => 5,
            ],
            [
                'department_id' => 1,
                'role_id' => 6,
                'user_id' => 6,
            ],
            [
                'department_id' => 2,
                'role_id' => 2,
                'user_id' => 7,
            ],
            [
                'department_id' => 2,
                'role_id' => 3,
                'user_id' => 8,
            ],
            [
                'department_id' => 2,
                'role_id' => 4,
                'user_id' => 9,
            ],
            [
                'department_id' => 2,
                'role_id' => 5,
                'user_id' => 10,
            ],
            [
                'department_id' => 2,
                'role_id' => 6,
                'user_id' => 11,
            ]

        ];
        foreach ($user as $key => $value) {
            UserDepartmentRole::create($value);
        }
    }
}
