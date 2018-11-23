@extends("front-end.master")
@section("metatags")
    <!-- HTML Meta Tags -->
    <title>{{$blog->blog_title}}</title>
    <meta name="description" content="{{$blog->blog_short_description}}">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="{{$blog->blog_title}}">
    <meta itemprop="description" content="{{$blog->blog_short_description}}">
    <meta itemprop="image" content="{{asset($blog->blog_image_direcotry)}}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="http://www.toufiqulislam.com/{{$blog->blog_short_description}}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{$blog->blog_title}}">
    <meta property="og:description" content="{{$blog->blog_short_description}}">
    <meta property="og:image" content="{{asset($blog->blog_image_direcotry)}}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="{$blog->blog_title}}">
    <meta name="twitter:title" content="{$blog->blog_title}}">
    <meta name="twitter:description" content="{{$blog->blog_short_description}}">
    <meta name="twitter:image" content="{{asset($blog->blog_image_direcotry)}}">

    <!-- Meta Tags Generated via http://heymeta.com -->
@endsection
@section("body")
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Title -->
                <h1 class="mt-4">{{$blog->blog_title}}</h1>

                <!-- Author -->
                <p class="lead">
                    by
                    <a href="#">Admin</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p>Posted on {{$blog->created_at}}</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-fluid rounded" src="{{asset($blog->blog_image_direcotry)}}" alt="">

                <hr>

                <!-- Post Content -->
                {!! $blog->blog_articles !!}



                <hr>



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