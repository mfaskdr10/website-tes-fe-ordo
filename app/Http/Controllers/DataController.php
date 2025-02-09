<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        

        return view('leader_boards.index', compact('leader_boards'));
    }
}
