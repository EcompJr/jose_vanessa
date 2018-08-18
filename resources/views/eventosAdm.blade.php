<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apae - Feira de Santana </title>

    <link rel="icon" type="image/jpg" href="public/images/apae5.png" />
    <link rel="stylesheet" href="public/vendor/bootstrap-4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">

    <link rel="stylesheet" href="public/vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="public/vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">


    <link rel="stylesheet" href="public/css/style.css">
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
                        <li><a href="eventosAdm.html">Eventos</a></li>
                        <li><a href="membroAdm.html">Membros</a></li>
                        
                        <!--<li class="menu-active"><a href="#team">DOE</a></li>-->
                    </ul>
                    
                    <div><a href="loginAdm.html"><img src="assets/img/admin.png" class="img-fluid" style="width:40px;height:40px" ></a></div>
                </nav>
               
            </div>
        </header>

        <main>

            <div class="col-10 offset-1">
                <section id="paginaAdmin">
                    <h3 class="text-center" style="font-weight: 700; color: black">Eventos</h3>
                    <section class="areaAdm ">
                        <button class="btn btn-success text-left" href="cadastrarEvento.html" style=" margin-bottom: 10px">Cadastrar Novo Evento</button>
                        
                        <div class="container">
                            <div class="row espac-evento">
                                <div class="col-6">
                                    <div class="row">
                                        <label>05 de Outubro de 2018</label>
                                    </div>
                                    <div class="row">
                                        
                                        <label>Nome do Evento</label>
                                    </div>
                                    <div class="row">
                                        
                                        <label>Local do Evento</label>
                                    </div>
                                    <div class="row">
                                        
                                        <label>Horário</label>
                                    </div>
                                </div>
                                <div class="col-6 text-right">
                                    <button class="btn" style="background-color: yellow; border-color: yellow;color: white">Alterar</button>
                                    <button class="btn" style="background-color: red; border-color:red;color: white">Remover</button>

                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row espac-evento">
                                <div class="col-6">
                                    <div class="row">
                                        <label>05 de Outubro de 2018</label>
                                    </div>
                                    <div class="row">
                                        <label>Nome do Evento</label>
                                    </div>
                                    <div class="row">
                                        <label>Local do Evento</label>
                                    </div>
                                    <div class="row">
                                        <label>Horário</label>
                                    </div>
                                </div>
                                <div class="col-6 text-right">
                                    <button type="submit" class="btn" style="background-color: yellow; border-color: yellow;color: white">Alterar</button>
                                    <button type="submit" class="btn" style="background-color: red; border-color:red;color: white">Remover</button>
        
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
            </div>
        


        </main>

        <footer class="footer">
                <div class="container" style="padding-top:20px;padding-bottom: 20px;align-items:center;margin-top: 10px;margin-bottom:10px">
                    <div class="row" >
                        <div class="col-12" >
                            <img src="assets/img/apae5.png" class:"img-fluid" style="width:90px;height:100px" alt="">
                            <h3 class="titulo-footer ">APAE - Feira de Santana</h3>
                            <p class="endereco">Tel: (75) 33217300 • E-mail: feiradesantana@apaebrasil.org.br</p>
                            <p class="endereco">Rua da APAE, 76 • Centro</p>
                            <p class="endereco">CEP: 44100000 • Feira de Santana • BA</p>
                        </div>
                    </div>
                </div>
            </footer>
    
            
        </div>
    
        <script src = "js/jquery.min.js"></script> 
        <script src="vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
        <script src="js/main.js"></script> 
        <script src = "vendor/OwlCarousel2-2.3.4/docs_src/assets/vendors/jquery.min.js"></script> 
        <script src = "vendor/bootstrap-4.1.1/js/bootstrap.min.js"></script> 
        <script src = "vendor/OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
    
    
        
    </body>
    </html>