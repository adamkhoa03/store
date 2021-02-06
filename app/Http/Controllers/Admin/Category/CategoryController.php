<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\EditCategoryRequest;
use App\Model\Admin\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use function Ramsey\Uuid\v1;

class CategoryController extends Controller
{
    //
    public function getCategory(){
        $category = Category::all();
        return view('Backend.Category.category',compact('category'));
    }
    public function postCategory(CategoryRequest $request){
        $slug = Str::slug($request->name,'-');
        Category::create([
            'name'=>$request->name,
            'slug'=>$slug,
            'parent'=>$request->parent
        ]);
        return redirect()->route('category.index')->with('key','success')->with('content','Đã thêm danh mục '.$request->name.' thành công !');
    }



    //Edit
    public function getEdit($id){
       $category = Category::all();
       $name = Category::find($id);
       session(['id'=>$id]);
        return view('Backend.Category.editcategory',['category'=>$category,'isParent'=>$id,'name'=>$name->name]);
    }
    public function postEdit($id,EditCategoryRequest $request){
        $slug = Str::slug($request->name,'-');
        Category::find($id)->update([
            'name'=>$request->name,
            'slug'=>$slug
        ]);
        return redirect()->back()->with('key','success')->with('content','Đã sửa danh mục thành: '.Category::find($id)->name);
    }

    //Delete
    public function delete($id){
      $name = Category::find($id)->name;
        Category::find($id)->delete();
        return redirect()->route('category.index')->with('key','danger')->with('content','Đã xóa thành công danh mục '.$name);
    }
}
