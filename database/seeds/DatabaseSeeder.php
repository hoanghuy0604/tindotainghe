<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'email' => 'Kimhaiadmin',
            'password' => bcrypt('KimHaiAdmin2017')
        ]);
    }
    public function admin1()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'email' => 'Kimhaiadmin',
            'password' => bcrypt('KimHaiAdmin2017')
        ]);
    }
    public function admin2()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'email' => 'hoang.hust.bk@gmail.com',
            'password' => bcrypt('HoangHuyAdmin2017')
        ]);
    }
}
