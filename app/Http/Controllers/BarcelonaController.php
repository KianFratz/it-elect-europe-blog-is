<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Builder\FunctionLike;

class BarcelonaController extends Controller
{
    //
    public function show()
    {
        
        return view('barcelona'); // Ensure this matches your view file
    }
}
