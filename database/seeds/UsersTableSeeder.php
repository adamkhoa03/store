<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            ['email'=>'admin@gmail.com','full'=>'ADMINSTRATOR','address'=>'Hà Nội','phone'=>'0988777878','password'=>bcrypt('123456'),'level'=>1,'avatar'=>'/store/public/backend/avatar/avatar1.jpg'],
            ['email'=>'adamkhoa03@gmail.com','full'=>'Minh Khoa','address'=>'Hà Nội','phone'=>'0988777878','password'=>bcrypt('123456'),'level'=>1,'avatar'=>'/store/public/backend/avatar/avatar2.jpg'],
        ]);
    }
}
