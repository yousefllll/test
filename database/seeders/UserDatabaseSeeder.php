<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Admin::create([
              'name'  => 'Yousef N',
              'email'  => 'yousefnader2003@gmail.com',
              'password'  => bcrypt('yousef2003'),

         ]);
    }
}
