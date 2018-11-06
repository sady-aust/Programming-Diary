<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Programming Diary</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset("/")}}/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset("/")}}css/blog-home.css" rel="stylesheet">



    <script src="{{asset("/")}}ckeditor/ckeditor.js"></script>
    <script src="{{asset("/")}}ckeditor/samples/js/sample.js"></script>
    <link rel="stylesheet" href="{{asset("/")}}ckeditor/samples/css/samples.css">
    <link rel="stylesheet" href="{{asset("/")}}ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
    <style>
        html {
            position: relative;
            min-height: 100%;
        }
        body {
            margin: 0 0 100px;
            /* bottom = footer height */
            padding: 25px;
        }
        footer {
            background-color: orange;
            position: absolute;
            left: 0;
            bottom: 0;
            height: 100px;
            width: 100%;
            overflow:hidden;
        }
    </style>

</head>

<body>

<!-- Navigation -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category Info
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="{{route("addcategory")}}" >Add Category</a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route("managecategory")}}">Manage Category</a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Blog Info
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="{{route("addblog")}}">Add Blog</a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route("manageblog")}}">Manage Blog</a>
                    </div>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield("body")

<!-- Footer -->
<footer class="py-5 bg-dark fixed-bottom">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{asset("/")}}/jquery/jquery.min.js"></script>
<script src="{{asset("/")}}/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
    initSample();
</script>


</body>

</html>
