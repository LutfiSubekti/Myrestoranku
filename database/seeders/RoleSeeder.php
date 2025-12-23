<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RoleSeeder extends Seeder
{

    public function run(): void
    {
        $roles = [
            [
                'role_name' => 'admin',
                'deskripsi' => 'Administrator with full access',
            ],
            [
                'role_name' => 'customer',
                'deskripsi' => 'Customer with limited access',
            ],
            [
                'role_name' => 'chef',
                'deskripsi' => 'Chef responsible for kitchen operations',
            ],
                        [
                'role_name' => 'cashier',
                'deskripsi' => 'Cashier responsible for transactions',
            ],

        ];
        DB::table('roles')->insert($roles);


    }
}
