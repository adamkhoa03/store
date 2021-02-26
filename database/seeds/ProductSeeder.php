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
            ['prd_code'=>'SP01','prd_name'=>'Áo Khoác Bomber Nỉ Xanh Lá Cây AK197','slug'=>'ao-khoac-bomber-ni-xanh-la-cay','prd_price'=>150000,'prd_featured'=>1,'prd_status'=>1,'prd_properties'=>'no properties','prd_details'=>'no details','prd_img'=>'img','cat_name'=>1],
            ['prd_code'=>'SP01','prd_name'=>'Áo Khoác Bomber Nỉ Xanh Lá Cây AK197','slug'=>'ao-khoac-bomber-ni-xanh-la-cay','prd_price'=>150000,'prd_featured'=>1,'prd_status'=>0,'prd_properties'=>'no properties','prd_details'=>'no details','prd_img'=>'img','cat_name'=>2],
            ['prd_code'=>'SP01','prd_name'=>'Áo Khoác Bomber Nỉ Xanh Lá Cây AK197','slug'=>'ao-khoac-bomber-ni-xanh-la-cay','prd_price'=>150000,'prd_featured'=>1,'prd_status'=>1,'prd_properties'=>'no properties','prd_details'=>'no details','prd_img'=>'img','cat_name'=>1],
        ]);
    }
}
