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
                <th scope="col">Category Name</th>
                <th scope="col">Short Description</th>
                <th scope="col">Publication Status</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @php($index =0)
            @foreach($categories as $category)
                <tr>
                    <th scope="row">{{$index++}}</th>
                    <td>{{$category->category_name}}</td>
                    <td>{{$category->category_short_description}}</td>
                    <td>{{$category->category_publication_status==1?"Published":"Unpublished"}}</td>
                    <td>
                        <a href="{{route("updatecategory",["categoryId"=>$category->id])}}">Edit</a>
                        /
                        <a href="{{route("deleteCategory",["categoryId"=>$category->id])}}">Delete</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

    </div>
</div>