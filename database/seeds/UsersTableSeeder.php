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
            "name" => "佐藤",
            "email" => google.com,
            "password" => Hash::make("12345678"),
            ],[
            "name" => "佐藤",
            "email" => google.com,
            "password" => Hash::make("12345678"),
            ]

        ]);
    }
}
