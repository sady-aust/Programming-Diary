@extends("front-end.master")
@section("metatags")
    <!-- HTML Meta Tags -->
    <title>About Me</title>
    <meta name="description" content="আমি মোঃ তৌফিকুল ইসলাম। বর্তমানে আহসানউল্লাহ বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়ে সিএসই বিভাগে পড়াশুনা করছি।">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="About Me">
    <meta itemprop="description" content="আমি মোঃ তৌফিকুল ইসলাম। বর্তমানে আহসানউল্লাহ বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়ে সিএসই বিভাগে পড়াশুনা করছি।">
    <meta itemprop="image" content="{{asset("/AboutMeImage/aboutme.JPG")}}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="http://www.toufiqulislam.com/aboutme">
    <meta property="og:type" content="website">
    <meta property="og:title" content="About Me">
    <meta property="og:description" content="আমি মোঃ তৌফিকুল ইসলাম। বর্তমানে আহসানউল্লাহ বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়ে সিএসই বিভাগে পড়াশুনা করছি।">
    <meta property="og:image" content="{{asset("/AboutMeImage/aboutme.JPG")}}">



    <!-- Meta Tags Generated via http://heymeta.com -->
@endsection

@section("body")
<div class="container">

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Title -->
            <h1 class="mt-4">আমার সম্পর্কে</h1>


            <hr>

            <!-- Preview Image -->
            <img class="img-fluid rounded" src="{{asset("/AboutMeImage/aboutme.JPG")}}" alt="myimage">
            <figcaption class="text-center">Intra AUST Programming Contest, Spring-2018</figcaption>

            <hr>

            <!-- Post Content -->

            আমি মোঃ তৌফিকুল ইসলাম। বর্তমানে আহসানউল্লাহ বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়ে সিএসই বিভাগে পড়াশুনা করছি। পাশাপাশি বাংলাদেশের সবচেয়ে বড় অনলাইন এডুকেশন প্লাটফর্ম <a href="http://10minuteschool.com/" target="_blank">10 Minute School</a>
            এ একজন Web Application Developer হিসেবে কাজ করছি। <br><br>
            ভালবাসি নতুন কোন টেকনোলজি শিখতে, প্রোজেক্ট ডেভলাপ করতে, অনলাইন জাজে প্রবলেম সলভ করতে এবং ঘুরাঘুরি করতে। ভবিষ্যতে একজন ভালো মানের সফটওয়্যার ইঞ্জিনিয়ার হতে চাই।


            <hr>



        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Search Widget -->
            <div class="card my-4">

            </div>

            <!-- Categories Widget -->
            <div class="card my-4">

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