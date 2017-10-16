<?php

namespace App\Http\Controllers;

use App\Cbk;

use Illuminate\Http\Request;

class OsController extends Controller
{
    public function index()
    {
        $os = Os::limit(500)->get();
        return view('os.view')
            ->with('week1', $os);

    }
}
