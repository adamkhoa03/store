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
            ['email'=>'admin@gmail.com','full'=>'Vietpro Shop','address'=>'Hà Nội','phone'=>'0988777878','password'=>bcrypt('123456'),'level'=>1,'avatar'=>'/store/public/backend/avatar/18057782_1979552158935162_1516013193011235986_n.jpg'],
            ['email'=>'adamkhoa03@gmail.com','full'=>'Minh Khoa','address'=>'Hà Nội','phone'=>'0988777878','password'=>bcrypt('123456'),'level'=>1,'avatar'=>'/store/public/backend/avatar/avatar.jpg'],
        ]);
    }
}
