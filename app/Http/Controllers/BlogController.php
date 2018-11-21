<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use DemeterChain\A;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
use DB;

class BlogController extends Controller
{
    //
//    public function Index(){
//        return view("front-end.Home.index");
//    }

    public function AddBlogView(){
        if(Auth::check()){

            $categories = Category::WHERE("category_publication_status",1)
                ->get();

            return view("admin.Blog.addblog",["categories"=>$categories]);
        }
        else{
            return  view("auth.login");
        }

    }

    protected function BlogImageUpload($request){
        $blog_image =$request->file("blog_img");

        $extension = $blog_image->getClientOriginalExtension();
        $imageName = $date = date('mdYhis', time()).".".$extension;
        $directory = 'blog-images/';
        $imageurl = $directory.$imageName;

        $img=Image::make($blog_image)->resize(750, 300);

        $img->save($imageurl);
        return $imageurl;

    }

    public function SaveBlog(Request $request){
        if(Auth::check()){

            $url = $this->BlogImageUpload($request);

            $blog = new Blog();
            $blog->blog_title = $request->blog_title;
            $blog->category_id = $request->category_id;
            $blog->blog_short_description = $request->blog_short_description;
            $blog->blog_articles = $request->blog_articles;
            $blog->blog_image_direcotry = $url;
            $blog->blog_publication_status = $request->blog_publication_status;
            $blog->save();
            return redirect("home/manageblogs")->with("message","Saved");


        }
        else{
            return  view("auth.login");
        }
    }

    public function ManageBlog(){
        if(Auth::check()){

            $blogs = DB::TABLE("blogs")
                ->JOIN("categories","blogs.category_id","=","categories.id")
                ->SELECT("blogs.*","categories.category_name")
                ->GET();


            return view("admin.Blog.manageblog",["blogs"=>$blogs]);
        }
        else{
            return view("auth.login");
        }

    }

    public function EditBlogView($blogId){
        if(Auth::check()){

            $blog = DB::TABLE("blogs")
                ->JOIN("categories","blogs.category_id","=","categories.id")
                ->SELECT("blogs.*","categories.category_name")
                ->WHERE("blogs.id",$blogId)
                ->FIRST();



            return view("admin.Blog.editBlog",["blog"=>$blog]);
        }
        else{
            return view("auth.login");
        }
    }

    public function UpdateBlog(Request $request){
        if(Auth::check()){


            $blog_image = $request->file("blog_img");

            if($blog_image){
                $blog = Blog::FIND($request->blog_id);


                unlink($blog->blog_image_direcotry);

                $url = $this->BlogImageUpload($request);

                $blog->blog_title = $request->blog_title;
                $blog->category_id = $request->category_id;
                $blog->blog_short_description = $request->blog_short_description;
                $blog->blog_articles = $request->blog_articles;
                $blog->blog_image_direcotry = $url;
                $blog->blog_publication_status = $request->blog_publication_status;
                $blog->SAVE();
                return redirect("home/manageblogs")->with("message","Updated");


            }
            else{
                $blog = Blog::FIND($request->blog_id);
                $blog->blog_title = $request->blog_title;
                $blog->category_id = $request->category_id;
                $blog->blog_short_description = $request->blog_short_description;
                $blog->blog_articles = $request->blog_articles;
                $blog->blog_publication_status = $request->blog_publication_status;
                $blog->SAVE();
                return redirect("home/manageblogs")->with("message","Updated");
            }
        }
        else{
            return view("auth.login");
        }
    }

    public function DeleteBlog($blogId){
        $blog = Blog::FIND($blogId);
        $blog->DELETE();
        return redirect("home/manageblogs")->with("message","DELETED");
    }


}
