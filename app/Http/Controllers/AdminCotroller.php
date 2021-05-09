<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminCotroller extends Controller
{
    public function users(){
        $users = DB::table('users')->paginate(10);
        return view(
            'users.index',
            [
                'users' =>$users
            ]
        );
    }
}
