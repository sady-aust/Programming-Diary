@extends("admin.master")

<div class="col-sm-8 m-xl-auto">
    <div class="card" style="margin-top: 100px">
        <div class="text-center">
            <h3>{{Session::get('message')}}</h3>
        </div>
        <table class="table">

            <thead class="thead-dark">

            <tr>
                <th scope="col">Sl No</th>
                <th scope="col">Blog Title</th>
                <th scope="col">Category Name</th>
                <th scope="col">Short Description</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @php($index = 0)
            @foreach($blogs as $blog)
                <tr>
                    <th scope="row">{{$index++}}</th>
                    <td>{{$blog->blog_title}}</td>
                    <td>{{$blog->category_name}}</td>
                    <td>{{$blog->blog_short_description}}</td>
                    <td>{{$blog->blog_publication_status==1?"Published":"Unpublished"}}</td>
                    <td>
                        <a href="{{Route("EditBlogView",["blogId"=>$blog->id])}}">Edit</a>
                        /
                        <a href="{{Route("DeleteBlog",["blogId"=>$blog->id])}}">Delete</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

    </div>
</div>