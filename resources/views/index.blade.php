<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apae - Feira de Santana </title>

    <link rel="icon" type="image/jpg" src="{{asset('images/apae5.png')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap-4.1.1/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css')}}">


    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>

    <div class="top-container">

        <header id="header">
            <div class="container-fluid" >
                <div id="logo" class="col-3">
                    <a href="/" class="scrollto"><img src="images/apae2.png" class="img-topBar img-fluid" alt=""></a>
                </div>
                <nav id="nav-menu-container " class="col-9 text-right" >
                    <ul class="nav-menu">
                        <li><a href="/">Inicio</a></li>
                        <li><a href="/quemsomos">Quem Somos</a></li>
                        <li><a href="/nossotime">Nosso Time</a></li>
                        <!--<li><a href="index.html#agenda">Agenda</a></li>
                        <li><a href="index.html#faleconosco">Fale Conosco</a></li>
                        <!--<li class="menu-active"><a href="#team">DOE</a></li>-->
                    </ul>
                    
                    <div><label><a href="{{ url('/login') }}">Login</a></label></div>
    
                </nav>
               
            </div>
           


        </header>


        <main class="corpo">
            <section id="inicio">
                <div class="">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img id="car1" class="d-block w-100" src="images/apae_car4.png" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img id="car2" class="d-block w-100" src="images/apae-1.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img id="car3" class="d-block w-100" src="images/apae-car2.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </div>
                </div>
            </section>

            <section id="missaovisaovalores">
                <div class="row">
                    <div class="col-4">
                        <div class="interior-missao">
                            <h5 class="text-center titulo-missao"><i class="fa fa-rocket"></i>Missão</h5>
                            <p class="parag">Prevenir, cuidar, promover a inclusão e defesa dos direitos das pessoas com deficiência intelectual,
                                     do nascer ao envelhecer.</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="interior-missao">
                            <h5 class="text-center titulo-missao"><i class="fa fa-eye"></i>Visão</h5>
                            <p class="parag">Ser a referência em assistência social, educação e saúde para pessoas com deficiência intelectual,
                                     na Bahia.</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="interior-missao">    
                            <h5 class="text-center titulo-missao"><i class="fa fa-star"></i>Valores</h5>
                            <p class="parag">Respeito à diversidade; Parceria com confiança; Coerência entre o que diz e o que faz;
                                     Excelência na que faz; Inovar para crescer; Senso de equipe; comprometimento.</p>
                        </div>
                    </div>
                </div>
            </section>

            

            <section id="agenda">
                <div class="col-12">
                    <section style="padding: 20px">
                        <h3 id="events-title" class="text-center">Agenda de Eventos</h3>
                            <div class="carousel-2" id="carousel-events">
                                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                                    </ol>
                                    <div class="carousel-inner" style="">
                                        <div class="carousel-item active text-center ">
                                            <h4 class=" tituloagenda text-center">Setembro</h4>
                                                <div class="row alinhamentoagenda">
                                                    <div class="col-6" style="">
                                                        <div class="dataevento"><label>04 de Setembro de 2018</label></div>
                                                        <div><label>Nome do Evento</label></div>
                                                        <div><label>Local do Evento</label></div>
                                                        <div><label>Horário</label></div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div  class="dataevento"><label>04 de Setembro de 2018</label></div>
                                                        <div><label>Nome do Evento</label></div>
                                                        <div><label>Local do Evento</label></div>
                                                        <div><label>Horário</label></div>
                                                    </div>
                                                </div>
                                                <div class="row alinhamentoagenda">
                                                    <div class="col-6 ">
                                                        <div class="dataevento"><label>04 de Setembro de 2018</label></div>
                                                            <div><label>Nome do Evento</label></div>
                                                            <div><label>Local do Evento</label></div>
                                                            <div><label>Horário</label></div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div  class="dataevento"><label>04 de Setembro de 2018</label></div>
                                                            <div><label>Nome do Evento</label></div>
                                                            <div><label>Local do Evento</label></div>
                                                            <div><label>Horário</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item text-center">
                                                    <h4 class=" tituloagenda text-center">Outubro</h4>
                                                    <div class="row alinhamentoagenda">
                                                        <div class="col-6">
                                                            <div class="dataevento"><label>05 de Outubro de 2018</label></div>
                                                            <div><label>Nome do Evento</label></div>
                                                            <div><label>Local do Evento</label></div>
                                                            <div><label>Horário</label></div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div  class="dataevento"><label>05 de Outubro de 2018</label></div>
                                                            <div><label>Nome do Evento</label></div>
                                                            <div><label>Local do Evento</label></div>
                                                            <div><label>Horário</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="row alinhamentoagenda">
                                                        <div class="col-6 ">
                                                            <div class="dataevento"><label>05 de Outubro de 2018</label></div>
                                                            <div><label>Nome do Evento</label></div>
                                                            <div><label>Local do Evento</label></div>
                                                            <div><label>Horário</label></div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div  class="dataevento"><label>05 de Outubro de 2018</label></div>
                                                            <div><label>Nome do Evento</label></div>
                                                            <div><label>Local do Evento</label></div>
                                                            <div><label>Horário</label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Anterior</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Próximo</span>
                                            </a>
                                        </div>
                                    </div>
                            </section>
                        </div>
            </section>

            <section id="faleconosco">
                <div class="col-6 offset-3">
                    <h3 class="text-center" id="contact-title">Fale Conosco</h3>
                    <form>
                        <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" aria-describedby="emailHelp" placeholder="Informe seu nome">
                        </div>
                        <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Informe seu email">
                        </div>
                        <div class="form-group">
                        <label for="mensagem">Mensagem</label>
                        <textarea class="form-control" id="mensagem" placeholder="Sua Mensagem" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-block" id="contact-button">ENVIAR</button>
                    </form>
                </div>
            </section>

        </main>


        <footer class="footer">
            <div class="container" id="footer" >
                <div class="row" >
                    <div class="col-12" >
                        <img src="{{asset('images/apae5.png')}}" class:"img-fluid" id="img-footer"  alt="">
                        <h3 class="titulo-footer ">APAE - Feira de Santana</h3>
                        <p class="endereco">Tel: (75) 33217300 • E-mail: feiradesantana@apaebrasil.org.br</p>
                        <p class="endereco">Rua da APAE, 76 • Centro</p>
                        <p class="endereco">CEP: 44100000 • Feira de Santana • BA</p>
                    </div>
                </div>
            </div>
        </footer>

        
    </div>

    <script src = "{{asset('js/jquery.min.js')}}"></script> 
    <script src="{{asset('vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script> 
    <script src = "{{asset('vendor/OwlCarousel2-2.3.4/docs_src/assets/vendors/jquery.min.js')}}"></script> 
    <script src = "{{asset('vendor/bootstrap-4.1.1/js/bootstrap.min.js')}}"></script> 
    <script src = "{{asset('vendor/OwlCarousel2-2.3.4/dist/owl.carousel.js')}}"></script>


    
</body>
</html>