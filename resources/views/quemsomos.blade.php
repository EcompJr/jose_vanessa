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
                <section id="quemsomos">
                    <h3 class="text-center" style="color: black">Quem Somos</h3>
                    <div>
                        <p class="parag">A APAE de Feira de Santana é uma organização social, de caráter assistencial, filantrópica, com uma estrutura organizacional composta de pais e pessoas da comunidade, que em condição de associados e voluntários, provêm à manutenção da mesma.</p>

                        <p class="parag">Fundada em 1967 por Pais de Excepcionais, e desativada em 1974, a APAE de Feira de Santana, ressurgiu em 1984, com a missão de promover e articular ações de defesa de direitos, prevenção, orientações, prestação de serviços e apoio à família, direcionadas à melhoria da qualidade de vida da Pessoa com Deficiência Intelectual, de ambos os sexos, a partir de zero ano, em regime de semi-internato e à construção de uma sociedade justa e solidária.</p>
                            
                        <p class="parag">Tem como atividade principal a assistência social, a defesa de direitos, prevenção da deficiência, educação básica, educação profissional, saúde, apoio à família, lazer, esporte, cultura, assistência ao idoso com deficiência, estudos e pesquisas, capacitação e aperfeiçoamento técnico profissional e inserção no mercado de trabalho da Pessoa com Deficiência Intelectual e Autismo, congregando a comunidade em geral, que em parceria com órgãos governamentais, procuram garantir a eficácia dos direitos sociais de seus clientes.</p>
                            
                        <p class="parag">Presta atendimento a cerca de 1.200 Pessoas com Deficiência Intelectual e/ou Múltipla e Autismo, de Feira de Santana e sua Macro-Região; sendo que 90% são pertencentes a uma classe sócio-econômica de baixa renda.</p>
                            
                        <p class="parag">Compõe a Rede de Cuidados á Pessoa com Deficiência no âmbito do Sistema Único de Saúde (SUS) na cidade, como Centro Especializado em Reabilitação – CER II, atendendo deficiência física e intelectual.</p>
                            
                        <p class="parag">A entidade possui uma equipe, com cerca de 200 profissionais composta de médicos (neuropediatra, ortopedista e psiquiatra), psicólogos, fisioterapeutas, terapeutas ocupacionais, psicopedagogos, assistentes sociais, fonoaudiólogos, musicoterapeuta, nutricionista, pedagogos, professores de educação física, professores especializados e auxiliares, enfermeiras, técnicos de enfermagem, administrador, auxiliares administrativos, pessoal de apoio, além de estagiários e voluntários.</p>
                            
                        <p class="parag">Para reabilitação destas pessoas são utilizados métodos e técnicas terapêuticas específicas, através de um conjunto de atividades individuais e em grupo de estimulação cognitiva, sensorial e psicomotora, visando à reeducação das funções cognitivas e sensoriais dos mesmos.</p>
                    </div>
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