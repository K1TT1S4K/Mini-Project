<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'is_admin' => '1',	//เซ็ตค่า 1 เพื่อระบุว่า เป็นแอดมิน
                'password' => '123456789',
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'is_admin' => '0',	//เซ็ตค่า 0 เพื่อระบุว่า เป็นผู้ใช้
                'password' => bcrypt('123456789'),
            ],
        ];
        foreach($user as $key => $value) {	//ลูปข้อมูลใน user	ส่งข้อมูลไปยัง Models\User
            User::create($value);	//เรียกใช้ create เพื่อเพิ่มข้อมูลไปที่ Database
        }
        //
    }
}
