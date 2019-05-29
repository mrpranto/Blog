<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'role_id' => '1',
            'name' => 'M.R Pranto',
            'email' => 'prantoabir1@gmail.com',
            'email_verified_at' => Carbon::today(),
            'password' => bcrypt('112233'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);

        DB::table('users')->insert([

            'role_id' => '2',
            'name' => 'Pranto Abir',
            'email' => 'prantoabir420@gmail.com',
            'email_verified_at' => Carbon::today(),
            'password' => bcrypt('112233'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);
    }
}
