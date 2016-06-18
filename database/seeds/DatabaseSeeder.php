<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(LogoTableSeeder::class);
    }
}

 class UsersTableSeeder extends Seeder
 {
 	public function run(){
 		DB::table('users')->insert([
 			array('email'=>'tienfethust@gmail.com','password'=>Hash::make('12345678'),'fullname'=>'Tran Van Tien','birthday'=>'13/09/1990','gender'=>'nam','status'=>'active','level'=>'superadmin')
 			]);
 	}
 }

    class ContactTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('contact')->insert([
        array('linkfacebook'=>'','linkgoogleplus'=>'','linktwitter'=>'','phone1'=>'','phone2'=>'','email'=>'','adress'=>'','linkgooglemap'=>'')
            ]);
    }
    }

 class LogoTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('logo')->insert([
        array('image'=>'')
            ]);
    }
    }
