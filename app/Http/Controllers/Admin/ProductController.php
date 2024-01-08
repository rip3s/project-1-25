<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        return view ('backend.user.product.index');
    }

    public function createform(){
        return view ('backend.user.product.createform');
    }

    public function edit(){
        return view ('backend.user.product.edit');
    }
}