<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public  function  __construct(){
        $this->middleware(['auth','verified']);
    }
    public function index()
    {
        $user = Auth::user();

        return 'DASHBOARD';
    }
}
