<?php
include_once('../class/conexao.php');

error_reporting(0);

session_start();

if (isset($_SESSION['usuario'])) {
    header("Location: cadastro_usuario.php");
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