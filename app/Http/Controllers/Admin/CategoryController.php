<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(){
        $category = Category::orderBy('category_id','desc')->Paginate(5);
        return view ('backend.user.category.index',compact('category'));
    }

    public function createform(){
        return view ('backend.user.category.createform');
    }

    public function edit($category_id){
        $cat = Category::find($category_id);
        return view ('backend.user.category.edit',compact('cat'));
    }
    public function insert(Request $request){
        //ป้องกันการกรอกข้อมูลผ่านฟอร์ม
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:255'
        ],
        [
         'name.required'=>'กรุณากรอกข้อมูลสินค้า',
         'name.unique'=>'ชื่อนี้มีอยู่ในฐานข้อมูลอยู่เเล้ว',
         'name.max'=>'กรอกข้อมูลได้ 255 ตัวอักษร'
        ]);
        //การบันทึกข้อมูล
        $category = new Category();
        $category->name = $request->name;
        $category ->save();
        alert()->success('บันทึกสำเร็จ','ข้อมูลนี้ถูกบันทึกเเล้ว');
        return redirect()->route('u.category');



    }

    public function update(Request $request, $category_id){
        $category = Category::find($category_id);
        $category->name = $request->name;
        $category->update();
        alert()->success('เเก้ไขข้อมูลสำเร็จ','ข้อมูลนี้ถูกบันทึกเเล้ว');
        return redirect()->route('u.category');
    }

    public function delete($category_id){
        $category = Category::find($category_id);
        $category->delete();
        alert()->success('ลบข้อมูลสำเร็จ','ข้อมูลนี้ถูกลบเเล้ว');
        return redirect()->route('u.category');
    }
}