<?php

namespace App\Http\Controllers;

use App\Cbk;

use Illuminate\Http\Request;

class Cbk6Controller extends Controller
{
    public function index()
    {
        $cbk6 = Cbk::limit(500)->get();
        return view('cbk6.view')
            ->with('week1', $cbk6);

    }
}
