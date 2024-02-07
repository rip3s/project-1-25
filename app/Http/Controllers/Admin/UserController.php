<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $u = User::all();
        $user = User::orderBy('id','desc')->Paginate(5);
        return view ('backend.user.user.index',compact('user'),compact('u'));
    }
    public function dashboard(){
        $u = User::all();
        $user = User::orderBy('id','desc')->Paginate(5);
        return view ('dashboard',compact('user'),compact('u'));
    }

}
