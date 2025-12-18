<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'first_name'=>env('ADMIN_FIRST_NAME'),
            'last_name'=>env('ADMIN_LAST_NAME'),
            'user_type'=>'admin',
            'email'=>env('ADMIN_EMAIL'),
            'password'=>Hash::make(env('ADMIN_PASSWORD')),
            'phone'=>null,
            'postal_code'=>null,
        ]);


//        User::create([
//            'first_name'=>'Daniel',
//            'last_name'=>'Paul',
//            'user_type'=>'admin',
//            'email'=>'admin@admin.com',
//            'password'=>Hash::make('password'),
//            'phone'=>'+4421345445',
//            'postal_code'=>'74700',
//        ]);
//
//        User::create([
//            'first_name'=>'Demo',
//            'last_name'=>'Demo',
//            'company'=>'Demo_Company',
//            'user_type'=>'customer',
//            'email'=>'demo@demo.com',
//            'password'=>Hash::make('password'),
//            'phone'=>'+4421345445',
//            'postal_code'=>'74700',
//        ]);
//        $params = [
//            'company_name' => "Demo_Company",
//            'first_name' => "Demo",
//            'last_name' => "Demo",
//            'role' => 1,
//            'email' => "demo@demo.com",
//            'password' => 'password',
//        ];
//        $register = new \App\Http\Controllers\Auth\RegisterController();
//        $register->register_in_saas($params);
    }
}
