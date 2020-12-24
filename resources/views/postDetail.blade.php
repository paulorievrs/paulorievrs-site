@extends('indexheader')
@section('headerindex')
@stop
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <div class="logo mr-auto">
            <h1 class="text-light"><a href="/"><span>PauloRievrs.dev</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="/#home">Home</a></li>
                <li><a href="/#portfolio">Ultimas postagens</a></li>
                <li><a href="/#contact">Entre em contato</a></li>
                <li><a href="postagens">Todas as postagens</a></li>

            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->

<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Post Detail</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="/postagens">Postagens</a></li>
                    <li>Post Detail</li>
                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details">
        <div class="container">

            <div class="portfolio-details-container">
                <div class="col-xs-20 col-md-10">

                    <div class="owl-carousel portfolio-details-carousel">
                        @foreach($imagelinks as $imagelink)
                            <img  src="{{ $imagelink->imageLink }}"  class="img-thumbnail postDetailImg" alt="">
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="portfolio-description">
                <h2>{{ $imagelinks[0]->postName }}</h2>
                <p>{{ $imagelinks[0]->postCaption }}</p>
                <p>{{ $imagelinks[0]->extraData }}</p>
                @foreach($extralinks as $extralink)
                    <p><a href="{{ $extralink->link }}" target="_blank">
                        {{ $extralink->name }}
                    </p></a>
                @endforeach
            </div>
            @if (strlen($imagelinks[0]->youtube) > 0)
                <iframe width="560" height="315" src="{{ $imagelinks[0]->youtube }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            @endif

        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-md-6">
                    <div class="footer-info" data-aos="fade-up" data-aos-delay="50">
                        <h3>Paulo Rievrs Oliveira</h3>

                        <strong>Email:</strong> contato@paulorievrs.site<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="https://instagram.com/paulorievrs.dev" target="_blank"  class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/paulo-rievrs/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            <a href="https://github.com/paulorievrs" target="_blank" class="linkedin"><i class="bx bxl-github"></i></a>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
    </div>

    <div class="container">
        <div class="copyright">
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->

@extends('indexfooter')
@section('footerindex')
@stop
