<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories3')->insert([
            [
                'name' => 'Drink', 
                'description' => 'Drink products',
                'created_at' => now(),
                'updated_at'=> now()
            ],
            [
                'name' => 'Đồ học tập', 
                'description' => 'Sản phẩm học tập',
                'created_at' => now(),
                'updated_at'=> now()
            ],
            [
                'name' => 'Đồ Gia Dụng', 
                'description' => 'Sản phẩm đồ gia dụng',
                'created_at' => now(),
                'updated_at'=> now()
            ],
            [
                'name' => 'Thời trang', 
                'description' => 'Sản phẩm thời trang',
                'created_at' => now(),
                'updated_at'=> now()
            ],
            [
                'name' => 'Mỹ phẩm', 
                'description' => 'Sản phẩm làm đẹp',
                'created_at' => now(),
                'updated_at'=> now()
            ]
            
        ]);
    }
}
