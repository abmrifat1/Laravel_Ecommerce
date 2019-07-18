<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('admin.category.add-category');
    }




    public function saveCategoryInfo(Request $request){
        $category=new Category();
        $category->category_name=$request->category_name;
        $category->category_description=$request->category_description;
        $category->publication_status=$request->publication_status;
        $category->save();

        return redirect('/add-category')->with('message','Category Info Save Successfully');
    }

    public function manageCategory(){
        $allCategories=Category::all();
        return view('admin.category.manage-category',['allCategories'=>$allCategories]);
    }

    public function unpublishedCategoryInfo($id){
        $categoryById= Category::find($id);
        $categoryById->publication_status=0;
        $categoryById->save();
        return redirect('/manage-category')->with('message','Category Info update Successfully');

    }



    public function publishedCategoryInfo($id){
        $categoryById= Category::find($id);
        $categoryById->publication_status=1;
        $categoryById->save();
        return redirect('/manage-category')->with('message','Category Info update Successfully');

    }

    public function editCategoryInfo($id){
        $categoryById= Category::find($id);
         return view('admin.category.edit-category',['categoryById'=>$categoryById]);
    }

    public function updateCategoryInfo(Request $request){
        $categoryById=Category::find($request->category_id);
        $categoryById->category_name=$request->category_name;
        $categoryById->category_description=$request->category_description;
        $categoryById->publication_status=$request->publication_status;

        $categoryById->save();
        return redirect('/manage-category')->with('message','Category Info update Successfully');

    }
    public function deleteCategoryInfo($id){
        $categoryById=Category::find($id);
        $categoryById->delete();
        return redirect('/manage-category')->with('message','Category Info delete Successfully');

    }

}
