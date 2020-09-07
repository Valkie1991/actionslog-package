<?php

namespace Henri\Actionslog\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActivityController extends Controller
{
    public function index()
    {
        $test = "Hallo";
        return view('actionslog::actionslog')->with('test', $test);
    }
}
