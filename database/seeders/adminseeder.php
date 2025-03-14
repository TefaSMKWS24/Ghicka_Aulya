<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

            [
                'email' => 'admin@admin.com',
                'name' => 'admin',
                'password' => Hash::make('12345678'),
            ],
        ];
        DB::table('admin')->insert($data);

    }
}
