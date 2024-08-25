<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => 1,
            'role' => 'مدير الموقع'
        ]);
        DB::table('roles')->insert([
            'id' => 2,
            'role' => 'مدير الاقسام'
        ]);
        DB::table('roles')->insert([
            'id' => 3,
            'role' => 'مدير الافراد'
        ]);
        DB::table('roles')->insert([
            'id' => 4,
            'role' => 'مدير التشغيلات'
        ]);
        DB::table('roles')->insert([
            'id' => 5,
            'role' => 'مدير العمليات'
        ]);
        DB::table('roles')->insert([
            'id' => 6,
            'role' => 'مدير المشرفين'
        ]);
    }
}
