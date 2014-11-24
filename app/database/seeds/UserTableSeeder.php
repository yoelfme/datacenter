<?php
/**
 * Created by PhpStorm.
 * User: yoel
 * Date: 17/11/14
 * Time: 23:02
 */

use Datacenter\User\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder {
    public function run()
    {
        User::create([
            'first_name'    =>  'Administrador',
            'last_name'     =>  'Sistema',
            'username'      =>  'admin',
            'email'         =>  'admin@datacenter.com',
            'password'      =>  Hash::make('admin')
        ]);
    }
} 