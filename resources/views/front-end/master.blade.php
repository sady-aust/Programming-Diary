<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

@yield("metatags")

<!-- Bootstrap core CSS -->
    <link href="{{asset("/")}}/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset("/")}}css/blog-home.css" rel="stylesheet">
    <link href="{{asset("/")}}ckeditor/plugins/codesnippet/lib/highlight/styles/default.css" rel="stylesheet">
    <script src="{{asset("/")}}ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <style>
        .bg-dark {
            background-color: #607d8b !important;
        }
        html {
            position: relative;
            min-height: 100%;
        }
        body {
            margin: 0 0 100px; /* bottom = footer height */
        }
        footer {
            position: absolute;
            left: 0;
            bottom: 0;
            height: 100px;
            width: 100%;
        }
    </style>


</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{route("/")}}">Programming Diary</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route("/")}}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route("aboutme")}}">About me</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

@yield("body")

<!-- Footer -->
<footer class="py-5 bg-dark footer">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Md. Toufiqul Islam 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{asset("/")}}/jquery/jquery.min.js"></script>
<script src="{{asset("/")}}/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>

</body>

</html>
