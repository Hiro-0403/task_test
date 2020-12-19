<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    //
    public function shops(){
        return $this->belongToMany("App\Models\Shop");
    }
}
