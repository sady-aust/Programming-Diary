<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    //

    public function Index(){

        if(Auth::check()) {
            return view("admin.Category.addcategory");
        }
        else{
            return view("auth.login");
        }


    }

    public function AddNewCategory(Request $request){


        $category = new Category();
        $category->category_name = $request->category_name;
        $category->category_short_description = $request->category_short_description;
        $category->category_publication_status = $request->category_publication_status;
        $category->save();

        return redirect("home/addcategory")->with("message","Category Saved");
    }

    public function Managecategory(){
        if(Auth::check()) {
            $categories = Category::all();
            return view("admin.Category.managecategory",["categories"=>$categories]);


        }
        else{
            return view("auth.login");
        }
    }

    public function EditCategory($categoryId){
        if(Auth::check()){
           $aCategory = Category::find($categoryId);


            return view("admin.Category.editcategory",["aCategory"=>$aCategory]);
        }
        else{
            return view("auth.login");
        }
    }

    public function UpdateCategory(Request $request){
        if(Auth::check()){


            $aCategory =  Category::find($request->id);
            $aCategory->category_name = $request->category_name;
            $aCategory->category_short_description = $request->category_short_description;
            $aCategory->category_publication_status = $request->category_publication_status;
            $aCategory->save();

            return redirect("home/managecatgory")->with("message","Updated");


        }
        else {
            return view("auth.login");
        }
    }

    public function DeleteCategory($categoryId){
        if(Auth::check()){
            $acategory = Category::find($categoryId);
            $acategory->delete();
            return redirect("home/managecatgory")->with("message","Deleted");
        }
        else{
            return view("auth.login");
        }
    }
}
