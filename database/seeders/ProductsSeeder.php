<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,100) as $index) {
            DB::table('products3')->insert([
                'name' => $faker->unique()->word, // Tên ngẫu nhiên
                'price' => $faker->numberBetween(5000, 200000), // Giá từ 5k - 50k
                'image' => $faker->imageUrl(200, 200, 'food'), // Link ảnh giả
                'cate_id' => $faker->numberBetween(1, 5), // Chọn ID danh mục ngẫu nhiên từ 1-5
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
