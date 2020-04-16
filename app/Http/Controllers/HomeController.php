<?php

namespace App\Http\Controllers;


use App\Models\Users\UserMasseges;

class HomeController extends Controller
{

    public function index(){

        $massages = UserMasseges::all()->get();

        return view('home.massage_list',['massages'=>$massages]);
    }
}
