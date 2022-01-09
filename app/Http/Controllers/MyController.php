<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function store(Request $req) {
        $filename = $req->imgpath->getClientOriginalName();
        $img = $req->imgpath->storeAs('', $filename);
        // dd($img);
    }
}
