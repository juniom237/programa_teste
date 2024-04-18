<?php
include_once('../class/conexao.php');

error_reporting(0);

session_start();

if (isset($_SESSION['usuario'])) {
    header("Location: cadastro.php");
}

if (isset($_POST['submit'])) {
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = md5($_POST['password']);
    $cofsenha = md5($_POST['cofpassword']);

    if ($senha == $cofsenha)
    {
        $sqlinsert = "SELECT * FROM usuarios WHERE email='$email'";
		$resultado = mysqli_query($conexao, $sqlinsert);
        if (!$resultado->num_rows > 0) 
        {
            $sqlinsert = "INSERT INTO usuarios (usuario, email, password)
                VALUES ('$usuario', '$email', '$senha')";
            $resultado = mysqli_query($conexao, $sqlinsert);
            if ($resultado) {
                
                header("Location: login.php");
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cofpassword'] = "";
            } else {
               
                echo "<script>alert('Ops! Algo deu errado!')</script>";
            }
        }
        else
        {
			
            echo "<script>alert('Alerta! Email ja existente!')</script>";
		}
    }
    else
    {
        
        echo "<script>alert('Atenção! Senha não são iguais!')</script>";
    }
}
?>
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
<div id="central-login">
        <div div class="content" align="center" >
            <form method="POST" class="col-sm-4" >
                <div class="input-container">
                  <input type="text" name="usuario" class="form-control" placeholder="Usuario" value="<?php echo $usuario; ?>" required><br>
                </div>
                <div class="input-container">                    
                  <input type="email" name="email" class="form-control" placeholder="exemplo@exemplo.com.br" value="<?php echo $email; ?>" required><br>
                </div>
                <div class="input-container">                
                  <input type="password" name="password" class="form-control" placeholder="***********" value="<?php echo $_POST['password']; ?>" required><br>
                </div>
                <div class="input-container">                
                  <input type="password" name="cofpassword" class="form-control" placeholder="***********" value="<?php echo $_POST['cofpassword']; ?>" required><br>
                </div>
                <br>
                <button type="submit" class="main-btn">Registar</button>&nbsp &nbsp &nbsp &nbsp<a class="main-btn" href="#" role="button">Cancelar</a>
            </form>
        </div>
    </div>
  <!--Scripts-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!--Font Awesome-->
  <script src="https://kit.fontawesome.com/505ccc358b.js" crossorigin="anonymous"></script>
</body>
</html>