@extends('indexheader')
@section('headerindex')
@stop

<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <div class="logo mr-auto">
            <h1 class="text-light"><a href="/"><span>PauloRievrs.dev</span></a></h1>

        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="/#home">Home</a></li>
                <li><a href="/#portfolio">Ultimas postagens</a></li>
                <li><a href="/#contact">Entre em contato</a></li>
                <li><a href="postagens">Todas as postagens</a></li>

            </ul>
        </nav>

    </div>
</header>

<main id="main">
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Postagens</h2>
                <ol>
                    <li><a href="index">Home</a></li>
                    <li>Postagens</li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">

        <div class="container">
            <p>Clique em uma postagem para obter mais informações dela.</p>
            <div class="row portfolio-container" data-aos="fade-up">

                @foreach($imagelinks as $imagelink)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <a href="/postagens/{{ $imagelink->postId }}" title="More Details">
                            <img src="{{ $imagelink->imageLink }}" class="img-fluid" alt="">
                            <i class="bx bx-link"></i>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        <div>
    </div>
        <div class="d-flex justify-content-center">
            {{ $imagelinks->links() }}
        </div>
    </div>
</section>


</main><!-- End #main -->

<!-- ======= Footer ======= -->
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

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

@extends('indexfooter')
@section('footerindex')
@stop
