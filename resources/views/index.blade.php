@extends('indexheader')
@section('headerindex')
@stop
<header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center">

        <div class="logo mr-auto">
            <h1 class="text-light"><a href="/"><span>PauloRievrs.dev</span></a></h1>

        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#portfolio">Ultimas postagens</a></li>
                <li><a href="#contact">Entre em contato</a></li>
                <li><a href="postagens">Todas as postagens</a></li>

            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->
<main id="main">

    <!-- ======= About Section ======= -->
    <section id="home" class="about">
        <div class="container">

            <div class="row no-gutters">
                <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="content">
                        <h1 style="color: #67B0D1">PauloRievrs.dev</h1>
                        <p>
                            Um site para mostrar extras do meu <a href="https://instagram.com/paulorievrs.dev" target="_blank">Instagram</a> e algo do meu portifolio.
                        <p>Faço lives na <a href="https://twitch.tv/paulorievrs_dev" target="_blank">Twitch</a>, caso queira acompanhar.</p>
                        </p>
                        <p>Tenho alguns projetos no <a href="https://github.com/paulorievrs" target="_blank">GitHub</a>, podem ir lá ver se quiserem</p>


                    </div>
                </div>
                <div class="col-xl-7 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-receipt"></i>
                                <h4>Sobre mim</h4>
                                <p>Sou atualmente um programador júnior, que utiliza como Stack, NodeJS, React Native e ReactJS. Tenho conhecimento em Laravel.</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-cube-alt"></i>
                                <h4>Porquê dessa Stack?</h4>
                                <p>Precisava aprender a construir aplicações de todo o nível, e achei que focar em uma linguagem só era o mais útil.</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="bx bx-images"></i>
                                <h4>Qual o motivo do seu instagram?</h4>
                                <p>Meu instagram foi criado para compartilhar conhecimento de forma rápida, e construir um comunidade boa.</p>
                            </div>

                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                <h2>Últimas postagens do instagram</h2>
                <p>Clique nas imagens para ver extras e referências do Instagram, e <a href="/postagens">clique aqui para ver sobre outros posts</a></p>
            </div>

            <div class="row portfolio-container" data-aos="fade-up">

            @foreach($imagelinks as $imagelink)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{ $imagelink->imageLink }}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="/postagens/{{ $imagelink->postId }}" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach

            </div>

        </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                <h2>Fale comigo</h2>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Aonde moro?</h3>
                        <p>Betim, MG - Brasil</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email</h3>
                        <p>contato@paulorievrs.site</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bxl-linkedin"></i>
                        <h3>LinkedIn</h3>
                        <a href="https://www.linkedin.com/in/paulo-rievrs/" target="_blank" class="linkedin">Aqui</a>
                    </div>
                </div>


            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="200">



                <div class="col-lg-12">
                    <form action="index" method="post" role="form" class="php-email-form">

                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nome"/>
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" data-rule="email" data-msg="Coloque um e-mail válido" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Coloque no minímo 8 caracteres" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" placeholder="Mensagem"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Mensagem enviado, obrigado!</div>
                        </div>
                        <div class="text-center"><button type="submit">Não está funcional</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-md-6">
                    <div class="footer-info" data-aos="fade-up" data-aos-delay="50">
                        <h3>Paulo Rievrs Oliveira</h3>

                        <strong>Email:</strong>contato@paulorievrs.site<br>
                        <div class="social-links mt-3">
                            <a href="https://instagram.com/paulorievrs.dev" target="_blank"  class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/paulo-rievrs/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            <a href="https://twitch.tv/paulorievrs_dev" target="_blank" class="linkedin"><i class="bx bxl-twitch"></i></a>
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
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

@extends('indexfooter')
@section('footerindex')
@stop


