<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;
class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::truncate();
        $department = [
            [
                'department_name' => 'Air way',
                'status' => 1
            ],
            [
                'department_name' => 'Consulting',
                'status' => 1
            ],
            [
                'department_name' => 'Courier Service',
                'status' => 1
            ],
            [
                'department_name' => 'Telecomnication',
                'status' => 1
            ],
            [
                'department_name' => 'Travel agency',
                'status' => 1
            ],
            [
                'department_name' => 'Real state',
                'status' => 1
            ]
        ];
        foreach ($department as $key => $value) {
            Department::create($value);
        }
    }
}
