<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apae - Feira de Santana </title>

    <link rel="icon" type="image/jpg" src="images/apae5.png">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap-4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">

    <link rel="stylesheet" type="text/css" href="vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">


    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <div class="top-container">

        <header id="header">
            <div class="container-fluid" style="display: flex;align-items: center">
                <div id="logo" class="col-3">
                    <a href="index.html" class="scrollto"><img src="images/apae2.png" class:"img-fluid" style="width:60px;height:60px" alt=""></a>
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
                    
                    <div><a href="{{ url('/login') }}"><label>Login</label></a></div>
    
                </nav>
               
            </div>
           


        </header>

        <main>
            <div class="col-4 offset-4">
                <section id="loginAdm">
                    <h4 class="text-center" style="color: #1976d3 ">Login Administrador</h4>
                   @if($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>

                   @endif
                   
                   
                    @if(session('msg'))
                        <div class="alert alert-danger">
                        {{session('msg')}}
                        </div>
                    @endif
                    <div class="text-center"><img src="images/admin.png" class="img-fluid" style="width:60px;height:60px" ></div>
                        <form method = "POST" name="login" action="/login">
                        {{csrf_field()}}
                            <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" name="password" id="senha" required>
                            </div>
                            <div class="form-group form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">Lembrar
                            </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </section>
            </div>
        </main>



        <footer class="footer">
            <div class="container" style="padding-top:20px;padding-bottom: 20px;align-items:center;margin-top: 10px;margin-bottom:10px">
                <div class="row" >
                    <div class="col-12" >
                        <img src="images/apae5.png" class:"img-fluid" style="width:90px;height:100px" alt="">
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