<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Model 
use App\Models\Train;


class TrainController extends Controller
{
    public  function index() {
        $trains = Train::where("departure_time", ">=", date("Y-m-d"))->get();  // Solo i treni in partenza da questo momento in poi
    
        return view('welcome', [
            "trains" => $trains
        ]);
    }
}
