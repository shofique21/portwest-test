<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
          $user = [
           [
            'name' => 'Shofique',
            'username' => 'shofique',
            'phone' => '01727904010',
            'email' => 'mislam629@gmail.com',
            'password' => Hash::make('12345678'),
        ],
        [
            'name' => 'Anik',
            'username' => 'anik',
            'phone' => '01822121572',
            'email' => 'anik@gmail.com',
            'password' => Hash::make('12345678'),
        ],
        [
            'name' => 'Ashad',
            'username' => 'ashad',
            'phone' => '01822121548',
            'email' => 'ashad@gmail.com',
            'password' => Hash::make('12345678'),
        ],
        [
            'name' => 'Anas',
            'username' => 'anas',
            'phone' => '01822121565',
            'email' => 'anas@gmail.com',
            'password' => Hash::make('12345678'),
        ],
        [
            'name' => 'Badsha',
            'username' => 'badsha',
            'phone' => '01822121523',
            'email' => 'badsha@gmail.com',
            'password' => Hash::make('12345678'),
        ],
        [
            'name' => 'Bashir',
            'username' => 'bashir',
            'phone' => '01822121534',
            'email' => 'bashir@gmail.com',
            'password' => Hash::make('12345678'),
        ],
        [
            'name' => 'Devil',
            'username' => 'devil',
            'phone' => '0167728223',
            'email' => 'devil@gmail.com',
            'password' => Hash::make('12345678'),
        ],
        [
            'name' => 'Evan',
            'username' => 'evan',
            'phone' => '06787672332',
            'email' => 'evan@gmail.com',
            'password' => Hash::make('12345678'),
        ],
        [
            'name' => 'Galib',
            'username' => 'galib',
            'phone' => '0878988232',
            'email' => 'galib@gmail.com',
            'password' => Hash::make('12345678'),
        ],
        [
            'name' => 'Hasan',
            'username' => 'hasan',
            'phone' => '02335546654',
            'email' => 'hasan@gmail.com',
            'password' => Hash::make('12345678'),
        ],
        [
            'name' => 'Ikbal',
            'username' => 'ikbal',
            'phone' => '0676387372',
            'email' => 'ikbal@gmail.com',
            'password' => Hash::make('12345678'),
        ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
