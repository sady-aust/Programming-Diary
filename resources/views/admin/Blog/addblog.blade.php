@extends("admin.master")
<div class="col-sm-8 m-xl-auto" >
    <div class="card" style="margin-top: 100px; overflow-x: scroll;height: 100%; width: 100%;">
        <form action="{{route("saveblog")}}" method="post" enctype="multipart/form-data">
            <div class="card-body" >
                @csrf
                <table class="justify-content-sm-start">
                    {{Session::get('message')}}
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Blog Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="blog_title" placeholder="Title of the blog" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Category Name</label>
                        <div class="col-sm-10">

                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Short Description</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" required name="blog_short_description" placeholder="Short Description">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Long Descrption</label>
                        <div class="col-sm-10">
                            <textarea id="editor" class="form-control" name="blog_articles">

                            </textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Blog Image</label>
                        <div class="col-sm-10">
                           <input type="file" name="blog_img" class="form-control" accept="image/*">
                        </div>
                    </div>

                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Publication Status</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="blog_publication_status" id="gridRadios1" value="0" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Unpublished
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="blog_publication_status" id="gridRadios2" value="1">
                                    <label class="form-check-label" for="gridRadios2">
                                        Published
                                    </label>
                                </div>

                            </div>
                        </div>
                    </fieldset>


                    <tr>
                        <td>
                            <div class="form-group row">
                                <div class="col-sm-12 ">
                                    <button type="submit" name="saveblog" value="SaveBlog" class="btn btn-success btn-block">Save Blog</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</div>