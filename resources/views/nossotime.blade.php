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
            <div class="container-fluid" style="display: flex;align-items: center">
                <div id="logo" class="col-3">
                    <a href="index.html" class="scrollto"><img src="assets/img/apae2.png" class:"img-fluid" style="width:60px;height:60px" alt=""></a>
                </div>
                <nav id="nav-menu-container " class="col-9 text-right" >
                    <ul class="nav-menu">
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="quemsomos.html">Quem Somos</a></li>
                        <li><a href="nossotime.html">Nosso Time</a></li>
                        <li><a href="index.html#agenda">Agenda</a></li>
                        <li><a href="index.html#faleconosco">Fale Conosco</a></li>
                        <!--<li class="menu-active"><a href="#team">DOE</a></li>-->
                    </ul>
                    
                    <div><a href="loginAdm.html"><img src="assets/img/admin.png" class="img-fluid" style="width:40px;height:40px" ></a></div>
                </nav>
               
            </div>
        </header>

        <main>
            <div class="col-8 offset-2">
                <section id="nossotime">
                    <h3 class="text-center">Equipe</h3>
                    
                    <section class="time">
                        <Label class="titulo-section text-center">DIRETORIA ADMINISTRATIVA</label>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                      <tr>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Função</th>
                                      </tr>
                                </thead>
                                <tbody>
                                      <tr>
                                        <th scope="row">Mary Diva P. Makhoul</th>
                                        <td>Diretor</td> 
                                      </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <section class="time">
                        <Label class="titulo-section text-center">COORDENADORES</label>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Função</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Alexandre Malta Santos</th>
                                        <td>Administrativo</td> 
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <section class="time">
                        <Label class="titulo-section text-center">EQUIPE TÉCNICA</label>
                        <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nome</th>
                                            <th scope="col">Função</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Alex Bacelar Oliveira</th>
                                            <td>Educador Físico</td> 
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
                    </section>

                    <section class="time">
                            <Label class="titulo-section text-center">ADMINISTRAÇÃO E AUXILIARES</label>
                            <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nome</th>
                                                <th scope="col">Função</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Alan Pereira da Paixão</th>
                                                <td>Auxiliar</td> 
                                            </tr>
                                        </tbody>
                                    </table>
                            </div>
                        </section>
                

                </section>
            </div>

        </main>



        <footer class="footer">
            <div class="container" style="padding-top:20px;padding-bottom: 20px;align-items:center;margin-top: 10px;margin-bottom:10px">
                <div class="row" >
                    <div class="col-12" >
                        <img src="{{asset('images/apae5.png')}}" class:"img-fluid" style="width:90px;height:100px" alt="">
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