<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use Illuminate\Http\Request;


class CafeController extends Controller
{
    public function register()
    {
        return view('cafe/cafe_register');
    }
   
    public function create(Request $request, Cafe $cafe)
    {
        $input = $request['cafe'];
        $cafe->fill($input)->save();
        return redirect('/');
    }
}
