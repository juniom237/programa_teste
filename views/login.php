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
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>
    <!--Menu-->
  <header>
    <div class="container" id="nav-container">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <a href="#" class="navabar-brand">
              <img src="../img/Abasteça_aqui.png" alt="logo" id="logo">
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
                    <a class="nav-item nav-link" href="#" id="clasificado-menu">Clasificado</a>
                    <a class="nav-item nav-link" href="#" id="serviço-menu">Serviço</a>
                    <a class="nav-item nav-link" href="#" id="contato-menu">Contato</a>
                </div>
            </div>
        </nav>
    </div>
</header>

  <main>
    <!--Login-->
    <div id="central-login">      
        <div class="content" align="center">
          <form method="POST" class="col-sm-4" action="../php/autentica.php">
            <div class ="input-container">
              <i class = "fa fa-user icon"></i>
                <input type="text" name="usuario" class="form-control" placeholder="Usuário"><br>
            </div>
  
            <div class="input-container">
              <i class="fa fa-key icon"></i>
                <input type="password" name="password" class="form-control" placeholder="***********"><br>
            </div>
            <button type="submit" class="main-btn">Logar</button>
            <br>
			      <p class="login-register-text">Don't have an account? <a href="cadastro.html">Register Here</a>.</p>
            
          </form>
        </div>
      </div>
  </main>
  <!--Scripts-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!--Font Awesome-->
  <script src="https://kit.fontawesome.com/505ccc358b.js" crossorigin="anonymous"></script>
</body>
</html>