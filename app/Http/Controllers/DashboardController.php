<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function userprofile(){
        return view ('pages.profile.userprofile');
    }
}
