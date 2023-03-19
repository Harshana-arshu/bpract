<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cust=new Customer;
        $cust->name='anju';
        $cust->email='anju617@gmail.com';
        $cust->phone='456789';
        $cust->save();

        $cust=new Customer;
        $cust->name='amala';
        $cust->email='amala123@gmail.com';
        $cust->phone='23456';
        $cust->save();
    }
}
