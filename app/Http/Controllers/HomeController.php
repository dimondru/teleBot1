<?php

namespace App\Http\Controllers;


use App\Models\Users\UserMasseges;

class HomeController extends Controller
{

    public function index(){

        $massages = UserMasseges::all();


        return view('home.massage_list',['massages'=>collect($massages)]);
    }
}
