<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Area;

class ShopController extends Controller

{
    //
    public function index(){
        #１対多の主従関係　主ー>従
        $area_tokyo = Area::find(1)->shops;


        #主 <- 従
        $shop = Shop::find(1)->area->name;
        dd($area_tokyo, $shop);

    }
}
