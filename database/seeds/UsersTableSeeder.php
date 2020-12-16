<?php

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
        DB::table("users")->insert([
            [
            "name" => "aaa",
            "email" => "test@test.com",
            "password" => Hash::make("12345678"),
            ],[
            "name" => "sss",
            "email" => "aaa@test.com",
            "password" => Hash::make("12345678"),
            ],[
            "name" => "sss",
            "email" => "bbb@test.com",
            "password" => Hash::make("12345678"),
            ]
        ]);
    }
}
