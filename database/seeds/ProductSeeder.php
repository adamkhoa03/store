<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            ['prd_code'=>'SP01','prd_name'=>'Sơ Mi Nam Đen Chìm','slug'=>'so-mi-nam-den-chim','prd_price'=>150000,'prd_featured'=>1,'prd_status'=>1,'prd_properties'=>'no properties','prd_details'=>'no details','prd_img'=>'img/products/product1.jpg','cat_name'=>1],
            ['prd_code'=>'SP02','prd_name'=>'Sơ Mi Nam Kẻ Caro','slug'=>'so-mi-nam-ke-caro','prd_price'=>120000,'prd_featured'=>1,'prd_status'=>0,'prd_properties'=>'no properties','prd_details'=>'no details','prd_img'=>'img/products/product2.jpg','cat_name'=>2],
            ['prd_code'=>'SP03','prd_name'=>'Sơ Mi Nam Vân Caro Xanh Trắng','slug'=>'so-mi-nam-van-caro-xanh-trang','prd_price'=>180000,'prd_featured'=>1,'prd_status'=>1,'prd_properties'=>'no properties','prd_details'=>'no details','prd_img'=>'img/products/product3.jpg','cat_name'=>1],
        ]);
    }
}
