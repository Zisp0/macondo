<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(Request $request){
        
        if(session('id')){
            return view('home');
        }
        return redirect('/');
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}
