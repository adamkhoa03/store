<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            ['name'=>'Nam','slug'=>'name','parent'=>0],
            ['name'=>'Nữ','slug'=>'nu','parent'=>0],
            ['name'=>'Áo Nam','slug'=>'ao-nam','parent'=>1],
            ['name'=>'Quần Nam','slug'=>'quan-nam','parent'=>1],
            ['name'=>'Áo Nữ','slug'=>'ao-nu','parent'=>2],
            ['name'=>'Quần Nữ','slug'=>'quan-nu','parent'=>2],
            ['name'=>'Áo Thun Nam','slug'=>'ao-thun-nam','parent'=>3]
        ]);
    }
}
