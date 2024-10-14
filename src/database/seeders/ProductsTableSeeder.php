<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '仙人',
            'price' => 100,
            'image' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg',
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => '牛助',
            'price' => 200,
            'image' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg',
        ];
        DB::table('products')->insert($param);
    }
}
