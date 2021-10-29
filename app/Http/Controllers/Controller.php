<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\menu;
use App\Models\about;
use App\Models\viloyat;
use App\Models\place;
use App\Models\tourpaket;
use App\Models\order;

class Controller extends BaseController
{
   

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct(){
        $this->menu = menu::with('children')
                        ->where('menu_id','=',0)
                        ->get();
        $this->about = about::where('id','=',1)
                        ->get();
        $this->useful_vil = viloyat::all()->random(5);
        $this->useful_place = place::all()->random(5);
        $this->places = place::all();
        $this->tourpaket = tourpaket::all();
        $this->orders = order::all();
        $this->viloyats = viloyat::inRandomOrder()->get();
       

    }
}
