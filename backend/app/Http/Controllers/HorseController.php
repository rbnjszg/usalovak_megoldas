<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HorseController extends Controller
{
    public function index()
    {
        return view("horse.index", []);
    }

    public function list()
    {
        return view("horse.list", []);
    }

    public function table()
    {
        return view("horse.table", []);
    }
    
    public function grid()
    {
        return view("horse.grid", []);
    }
}
