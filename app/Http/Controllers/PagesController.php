<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function charts(){
        return view("admin.charts");
    }
    public function tables(){
        return view("admin.table");
    }
    public function forgotps(){
        return view("auth.forgot-password");
    }
    public function erros404(){
        return view("admin.404");
    }
}
