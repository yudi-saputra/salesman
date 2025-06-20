<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['id' => 1, 'name' => 'Administrator'],
            ['id' => 2, 'name' => 'Finance / Admin'],
            ['id' => 3, 'name' => 'Regional Sales Manager'],
            ['id' => 4, 'name' => 'Sales Area Manager'],
            ['id' => 5, 'name' => 'Sales'],
        ]);
    }
}
