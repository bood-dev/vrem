<?php

use Illuminate\Database\Seeder;
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
        $adminUser = new App\User;
        $adminUser->name = 'Administrator';
        $adminUser->password = Hash::make('admin123');
        $adminUser->email = 'administrator@mailinator.com';
        $adminUser->save();
    }
}
