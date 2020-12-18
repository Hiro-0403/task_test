<?php

use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("shops")->insert([
            [
                "id" => 1,
                "shop_name" => "ラーメン店",
                "area_id" => 1
            ],
            [
                "id" => 2,
                "shop_name" => "フランス料理店",
                "area_id" => 2
            ],
            [
                "id" => 3,
                "shop_name" => "マクドナルド",
                "area_id" => 1
            ],
            [
                "id" => 4,
                "shop_name" => "カフェ",
                "area_id" => 3
            ],
            [
                "id" => 5,
                "name" => "焼肉店",
                "area_id" => 5
            ],
        ]);
    }
}
