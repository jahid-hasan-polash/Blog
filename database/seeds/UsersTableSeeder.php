<?php

use App\Model\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Use this user for login as admin
        User::create(['name' => 'admin','email' => 'admin@infancyit.com','password' => bcrypt('a')]);
        //Use this user for login as user
        User::create(['name' => 'mas','email' => 'mrsiddiki@gmail.com','password' => bcrypt('a')]);
    }
}
