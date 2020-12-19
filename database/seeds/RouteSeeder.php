<?php

use Illuminate\Database\Seeder;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("routes")->insert([
            [
            "id" => 1,
            "name" => "阪急",
            "sort_no" => 1,
            ],
            [
            "id" => 2,
            "name" => "阪神",
            "sort_no" => 2,
            ],
            [
            "id" => 3,
            "name" => "南海",
            "sort_no" => 3,
            ],
            [
            "id" => 4,
            "name" => "近鉄",
            "sort_no" => 4,
            ]

        ]);
    }
}
