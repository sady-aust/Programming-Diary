<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPannelController extends Controller
{
    //

    public function Index(){
        echo view("admin.Home.index");
    }
}
