<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function userprofile(){
        return view ('pages.profile.userprofile');
    }

    public function mysubscription(){
        return view ('pages.profile.mysubscription');
    }

    public function newsfeed(){
        return view ('pages.profile.newsfeed');
    }

    public function admin(){
        return view ('pages.admin.admin');
    }
    
}
