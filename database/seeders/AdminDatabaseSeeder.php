<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminDatabaseSeeder extends Seeder
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
