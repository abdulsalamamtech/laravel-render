<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function index(){
        $users = [
            [
                "name" => "amtech",
                "skills" => "web dev",
                "age" => 21
            ]
            ,
            [
                "name" => "softtech",
                "skills" => "app dev",
                "age" => 18
            ]
        ];
        return view('users.dashboard', ['users' => $users]);
    }

    public function users(){
        return view('home');
    }
}
