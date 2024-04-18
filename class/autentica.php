<meta charset="utf-8">
<?php
include_once('php/conexao.php');

session_start();

if(!empty($_POST) AND (empty($_POST['usuario'])) or (empty($_POST['password'])))
{
    function myAlert($msg, $url)
    {
        echo'<script language="javascript">alert("'.$msg.'");</script>';
        echo"<script>document.localtion = '$url'</script>";
    }
    myAlert("Usuario ou senha incorretos! Verifique os inseridos!", "login.php");
}
else
{
    $_SESSION["autenticado"] = "rfc822_allowed";
    $_SESSION["usuario"] =$usuario;
    header("Location: welcome.php");
}

?>