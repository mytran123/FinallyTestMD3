<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staff = new Staff();
        $staff->group = "Quản lý hệ thống";
        $staff->name = "Mỹ Trần";
        $staff->birthday = "09/11/1996";
        $staff->gender = "Nữ";
        $staff->phone = "0123456789";
        $staff->CMND = "222333444555";
        $staff->email = "mytran@gmail.com";
        $staff->address = "Sài Gòn";
        $staff->save();

        $staff = new Staff();
        $staff->group = "Quản lý nhân sự";
        $staff->name = "Hà Thu";
        $staff->birthday = "10/10/2003";
        $staff->gender = "Nữ";
        $staff->phone = "0123456789";
        $staff->CMND = "222666444555";
        $staff->email = "hathu@gmail.com";
        $staff->address = "Phú Thọ";
        $staff->save();

        $staff = new Staff();
        $staff->group = "Lễ tân";
        $staff->name = "Mi Chan";
        $staff->birthday = "30/03/2021";
        $staff->gender = "Nữ";
        $staff->phone = "0123456789";
        $staff->CMND = "222333888555";
        $staff->email = "richan@gmail.com";
        $staff->address = "Đà Nẵng";
        $staff->save();

        $staff = new Staff();
        $staff->group = "Quản lý phòng";
        $staff->name = "Dung Trần";
        $staff->birthday = "27/12/1999";
        $staff->gender = "Nữ";
        $staff->phone = "0123456789";
        $staff->CMND = "222333999555";
        $staff->email = "dungtran@gmail.com";
        $staff->address = "Nghệ An";
        $staff->save();

        $staff = new Staff();
        $staff->group = "Quản lý dịch vụ";
        $staff->name = "Tuấn Anh";
        $staff->birthday = "09/02/1999";
        $staff->gender = "Nam";
        $staff->phone = "0123456789";
        $staff->CMND = "777333444555";
        $staff->email = "tuananh@gmail.com";
        $staff->address = "Hà Nội";
        $staff->save();
    }
}
