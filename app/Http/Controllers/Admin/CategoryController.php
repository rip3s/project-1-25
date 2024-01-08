<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(){
        return view ('backend.user.category.index');
    }

    public function createform(){
        return view ('backend.user.category.createform');
    }

    public function edit(){
        return view ('backend.user.category.edit');
    }
}