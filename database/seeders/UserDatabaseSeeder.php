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
              'mobile'  => '0500861853',
              'password'  => bcrypt('yousef2003'),

         ]);
    }
}
