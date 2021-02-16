<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $sb = $request->startingBalance;
        $sb = $request->startingBalance;

        //        return $sb + 1;

        // return [
        //     $request->all()
        // ];

        return view('home');
    }
}
