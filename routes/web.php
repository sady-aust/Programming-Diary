<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('demo');
//});

Route::get("/",[
    "uses"=>"FrontEndController@Index",
    "as"=>"/"
]);

Route::get("/home",[
    "uses"=>"AdminPannelController@Index",
    "as"=>"/home"
]);

Auth::routes();



Route::get("home/addcategory",[
   "uses"=>"CategoryController@Index",
   "as"=>"addcategory"
]);
Route::post("home/addnewcategory",[
   "uses"=>"CategoryController@AddNewCategory",
   "as"=>"addnewcategory"
]);


Route::get("home/managecatgory",[
    "uses"=>"CategoryController@Managecategory",
    "as"=>"managecategory"
]);

Route::get("home/editcategory/{categoryId}",[
   "uses"=>"CategoryController@EditCategory",
    "as"=>"updatecategory"
]);

Route::post("home/updateacategory",[
    "uses"=>"CategoryController@UpdateCategory",
    "as"=>"updateacategory"
]);

Route::get("home/deletecategory/{categoryId}",[
    "uses"=>"CategoryController@DeleteCategory",
    "as"=>"deleteCategory"
]);

Route::get("home/addblog",[
    "uses"=>"BlogController@AddBlogView",
    "as"=>"addblog"
]);

Route::post("home/saveblog",[
    "uses"=>"BlogController@SaveBlog",
    "as"=>"saveblog"
]);

Route::get("home/manageblogs",[
    "uses"=>"BlogController@ManageBlog",
    "as"=>"manageblog"
]);

Route::get("home/editblog/{blogId}",[
    "uses"=>"BlogController@EditBlogView",
    "as"=>"EditBlogView"
]);


Route::post("home/updateblog",[
    "uses"=>"BlogController@UpdateBlog",
    "as"=>"updateblog"
]);

Route::get("home/deleteblog/{blogId}",[
    "uses"=>"BlogController@DeleteBlog",
    "as"=>"DeleteBlog"
]);

Route::get("home/{blogtitle}/{blogid}",[
    "uses"=>"FrontEndController@ReadMore",
    "as"=>"readmore"
]);

Route::get("/aboutme",[
    "uses"=>"FrontEndController@AboutMe",
    "as"=>"aboutme"
]);
//Route::get('/home', 'HomeController@index')->name('home');

