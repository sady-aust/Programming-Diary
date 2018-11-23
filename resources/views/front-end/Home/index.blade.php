@extends("front-end.master")
@section("body")
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="my-4">সাদীর
                    <small>প্রোগ্রামিং ডায়েরী</small>
                </h1>

            @foreach($blogs as $blog)
                <!-- Blog Post -->
                    <div class="card mb-4">
                        <img class="card-img-top" src="{{asset($blog->blog_image_direcotry)}}" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title">{{$blog->blog_title}}</h2>
                            <p class="card-text">{{$blog->blog_short_description}}</p>
                            <a href="{{route("readmore",["blogtitle"=>$blog->blog_title,"blogid"=>$blog->id])}}" class="btn btn-primary">Read More &rarr;</a>

                        </div>
                        <div class="card-footer text-muted">
                            Posted on {{$blog->created_at}} by
                            <a href="#">Admin</a>
                        </div>
                    </div>
            @endforeach


            <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                    {{$blogs->links()}}
                </ul>

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Search Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Search</h5>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
                        </div>
                    </div>
                </div>

                <!-- Categories Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Categories</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    @foreach($categories as $category)
                                        <li>
                                            <a href="#">{{$category->category_name}}</a>
                                        </li>

                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Social Links</h5>
                    <div class="card-body">
                        <a style="color: inherit" href="https://www.facebook.com/toufiq.austcse" target="_blank"><i class="fab fa-facebook-square fa-3x"></i></a>
                        <a style="color: inherit" href="https://github.com/sady-aust" target="_blank"> <i class="fab fa-github fa-3x"></i></a>
                        <a style="color: inherit" href="https://www.youtube.com/channel/UCCfbUaeYuAgKzkLIMs3UArg"target="_blank"><i class="fab fa-youtube fa-3x"></i></a>
                        <a style="color: inherit" href="https://www.linkedin.com/in/toufiqcse36/" target="_blank"> <i class="fab fa-linkedin fa-3x"></i></a>
                        <a style="color: inherit" href="https://www.instagram.com/sady_96/" target="_blank"> <i class="fab fa-instagram fa-3x"></i></a>


                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection