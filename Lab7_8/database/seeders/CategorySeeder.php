<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Điện thoại', 'description' => 'Các sản phẩm điện thoại di động', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Laptop', 'description' => 'Máy tính xách tay', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tablet', 'description' => 'Máy tính bảng', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Phụ kiện', 'description' => 'Các phụ kiện điện tử', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Đồng hồ', 'description' => 'Đồng hồ thông minh và truyền thống', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}