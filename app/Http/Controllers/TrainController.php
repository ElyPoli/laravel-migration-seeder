<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function home() {
        $currentDate = now();

        $data = Train::where("data_di_partenza", ">=", $currentDate)->get();

		return view('home', [
            "trainsList" => $data
        ]);
    }
}