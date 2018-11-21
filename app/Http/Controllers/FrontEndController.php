<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
    public function Index(){
        $blogs = Blog::WHERE("blog_publication_status",1)
                        ->ORDERBY("id","DESC")
                        ->Paginate(3);
        $categories = Category::WHERE("category_publication_status",1)
                                ->GET();




       return view("front-end.Home.index",["blogs"=>$blogs,"categories"=>$categories]);
    }

    public function ReadMore($blosdfgTitle,$blosdgid){

        $blog = Blog::FIND($blosdgid);
        $categories = Category::WHERE("category_publication_status",1)
            ->GET();


           return view("/front-end.BlogDetails.blogdetails",["blog"=>$blog,"categories"=>$categories]);
    }
}
