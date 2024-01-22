<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use File;
Use Image;
Use Illuminate\Support\str;

class ProductController extends Controller
{
    public function product(){
        $product = Product::orderBy('product_id','desc')->Paginate(5);
        return view ('backend.user.product.index',compact('product'));
    }

    public function createform(){
        return view ('backend.user.product.createform');
    }

    public function edit($product_id){
        $pro = Product::find($product_id);
        return view ('backend.user.product.edit',compact('pro'));
    }
    public function insert(Request $request){

        $product = new Product;
        //ป้องกันการกรอกข้อมูลผ่านฟอร์ม
        $validated = $request->validate([
            'name' => 'required|unique:products|max:255',
            'price' => 'required|unique:products|max:255',
            'description' => 'required|unique:products|max:255'
        ],
        [
         'name.required'=>'กรุณากรอกข้อมูลสินค้า',
         'name.unique'=>'ชื่อนี้มีอยู่ในฐานข้อมูลอยู่เเล้ว',
         'name.max'=>'กรอกข้อมูลได้ 255 ตัวอักษร'
        ]);
        //การบันทึกข้อมูล
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        if ($request->hasFile('image')){
            $filesname = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/backend/product/',$filesname);
            Image::make(public_path().'/backend/product/'.$filesname)->resize(250,250)->save(public_path().'/backend/product/resize/'.$filesname);
            $product->image = $filesname;
        }
        else
            $product->image = 'ไม่มีรูปภาพ';

        $product ->save();
        alert()->success('บันทึกสำเร็จ','ข้อมูลนี้ถูกบันทึกเเล้ว');
        return redirect('admin/user/product');
    }


    public function update(Request $request, $product_id){
        $product = Product::find($product_id);
        $product->name = $request->name;
        $product->update();
        alert()->success('เเก้ไขข้อมูลสำเร็จ','ข้อมูลนี้ถูกบันทึกเเล้ว');
        return redirect()->route('u.product');
    }

    public function delete($product_id){
        $product = Product::find($product_id);
        $product->delete();
        alert()->success('ลบข้อมูลสำเร็จ','ข้อมูลนี้ถูกลบเเล้ว');
        return redirect()->route('u.product');
    }

}