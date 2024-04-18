<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Fonte-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&family=Square+Peg&display=swap" rel="stylesheet">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.css"> 

</head>
<body>
    <!--Menu-->
    <header class="header">
        <div class="container" id="nav-container">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                <a href="#" class="navabar-brand">
                    <img src="img/Abasteça_aqui.png" alt="logo" id="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" 
                aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="#" id="home-menu">Home</a>
                        <a class="nav-item nav-link" href="#" id="about-menu">Sobre a Plataforma</a>
                        <a class="nav-item nav-link" href="#" id="empresa-menu">Empresa</a>
                        <a class="nav-item nav-link" href="../views/consultar.php" id="clasificado-menu">Clasificado</a>
                        <a class="nav-item nav-link" href="#" id="serviço-menu">Serviço</a>
                        <a class="nav-item nav-link" href="#" id="contato-menu">Contato</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="container-fluid">
            <!--Slider-->
            <div id="mainSlider" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    
                  </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/abastecimento.png" class="d-block w-100" alt="abastecimento">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Abasteça com inteligência</h2>
                                <p>Encontre o posto mais proximo de você com os melhores preços e qualidade e muito mais para o seu carro</p>
                            <!--<a href="#" class="main-btn">1</a>-->
                            </div>                            
                        </div>
                        <div class="carousel-item">
                            <img src="img/posto.png" class="d-block w-100" alt="posto">
                            <div class="carousel-caption d-none d-md-block">
                            <h2>Anuncie aqui!</h2>
                            <p>O jeito mais simples de anunciar, economizar e vender combustiveis</p>
                            <!--<a href="#" class="main-btn">1</a>-->
                            </div>                            
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                    </div>
            </div>
            <br><br>
            <!--Sobre a Plataforma-->
            <div id="about-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">ABASTEÇA AQUI</h3>
                        </div>
                        <div class="col-md-6">
                            <img class="img-fluid" src="img/posto-de-gasolina.png" alt="emprego">
                        </div>
                        <div class="col-md-6">
                            <h3 class="about-title">ABASTEÇA AQUI</h3>
                            <p>
                                Devido a alta variação no preço dos combustiveis nossa equipe decidiu criar um plataforma rapida e eficaz onde tanto os consumidores
                                como os proprietarios de postos podem ser beneficiados, fornecendo os melhores preços atualidos em tempo real e divulgando os postos
                                da região
                            </p>
                            <ul id="about-list">
                                <li><i class="fas fa-check"></i>Melhores Preços</li>
                                <li><i class="fas fa-check"></i>Endereços</li>
                                <li><i class="fas fa-check"></i>Confiabilidade nas informações</li>
                                <li><i class="fas fa-check"></i>Suporte ao Usuario</li>
                            </ul>
                            
                        </div>
                    </div>
                </div>

            </div>
            <!--Serviço da Plataforma-->
            <div id="services-area" class="img">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Porque eu Deveria usar a Plataforma?</h3>
                        </div>
                        <div class="col-md-4 services-box">
                            <i class="fa-solid fa-handshake"></i>
                            <h4>Confiança</h4>
                            <p>A plataforma possui um sistema muito rigoroso e confiavel para garantir que todas as informações sejam verdadeiras</p>
                        </div>
                        <div class="col-md-4 services-box">
                            <i class="fa-solid fa-dollar-sign"></i>
                            <h4>Melhores Preços</h4>
                            <p>Os preços são atualizados em tempo real, então você não fica por fora de nenhuma novidade</p>
                        </div>
                        <div class="col-md-4 services-box">
                            <i class="fa-solid fa-hand-holding-dollar"></i>
                            <h4>Encontre a melhor oferta perto de você</h4>
                            <p>A plataforma oferece suporte para exibir as melhores ofertas Perto de você!, assim você economiza tempo e dinheiro</p>
                        </div>
                        <div class="col-12">
                            <h3 class="main-title">Porque eu Deveria me Cadastrar na Plataforma?</h3>
                        </div>
                        <div class="col-md-4 services-box">
                            <i class="fa-solid fa-bullhorn"></i>
                            <h4>Divulgação</h4>
                            <p>Seu posto estando cadastrado em nossa plataforma se tornaria mais visivel sendo assim atraindo mais clientes</p>
                        </div>
                        <div class="col-md-4 services-box">
                            <i class="fa-solid fa-award"></i>
                            <h4>Qualidade</h4>
                            <p>Você podera exibir a todos a qualidade do seu serviço, se destacando da média e entrando nos padrões de qualidade da plataforma, Gerando uma 
                            boa reputação para você!</p>
                        </div>
                        <div class="col-md-4 services-box">
                            <i class="fa-solid fa-gas-pump"></i>
                            <h4>gdfgdegdf</h4>
                            <p>dsdfddfdsfdsfdsfdsffdfdfdsfdsfsdfdsfsdfsdfsdfdsfsdfds</p>
                        </div>
                    </div>    
                </div>
                
            </div>
        </div>
    </main>
    <footer>
        <div id="contact-area">
          <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h3 class="main-title">Entre em contato conosco</h3>
                </div>
                <div class="col-md-4 contact-box">
                  <i class="fas fa-phone"></i>
                  <p><span class="contact-tile">Ligue para:</span> (48)99999-9999</p>
                  <p><span class="contact-tile">Horários:</span> 8:00 - 19:00</p>
                </div>
                <div class="col-md-4 contact-box">
                  <i class="fas fa-envelope"></i>
                  <p><span class="contact-tile">Envie um email:</span> contato@hdcagency.com.br</p>
                </div>
                <div class="col-md-4 contact-box">
                  <i class="fas fa-map-marker-alt"></i>
                  <p><span class="contact-tile">Venha tomar um café:</span> Rua Lorem Ipsum - 1314</p>
                </div>
                <div class="col-md-6" id="msg-box">
                  <p>Ou nos deixe uma mensagem:</p>
                </div>
                <div class="col-md-6" id="contact-form">
                  <form action="">
                    <input type="text" class="form-control" placeholder="E-mail" name="email">
                    <input type="text" class="form-control" placeholder="Assunto" name="subject">
                    <textarea class="form-control" rows="3" placeholder="Sua mensagem..." name="message"></textarea>
                    <input type="submit" class="main-btn">
                  </form>
                </div>
              </div>
          </div>
        </div>
        <div id="copy-area">
          <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <p>Desenvolvido por <a href="#" target="_blank">Grupo do TCC Etec</a> &copy; 2022</p>
                </div>
            </div>
          </div>
        </div>
    </footer>
    


    <!--Scripts-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/505ccc358b.js" crossorigin="anonymous"></script>
</body>
</html>