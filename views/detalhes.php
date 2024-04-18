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
	<header class="header">
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
                        <a class="nav-item nav-link" href="../views/consultar.php" id="clasificado-menu">Clasificado</a>
                        <a class="nav-item nav-link" href="#" id="serviço-menu">Serviço</a>
                        <a class="nav-item nav-link" href="#" id="contato-menu">Contato</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
	<main class="container" id="main">
		<?php
					
			include_once('../class/conexao.php');
			if (isset($_GET['id']))
			{
				$id = $_GET['id'];
			}
			else
			{
				header('Location: consulta.php');
			}

			$sql = "SELECT * FROM postos p inner join cidades ci on ci.id = p.id_cidade WHERE p.id=$id";
					
			$resultado = mysqli_query($conexao, $sql);

			if (!$resultado)
			{
				echo '<input type="button" onclick = "window.location= '."'consulta.php'".';" value= "voltar"><br><br>';
				die('<b>Query Inválida</b>' .@mysqli_error($conexao));
			}
			$dado = mysqli_fetch_array($resultado);
			echo "<table border='1px' class='table align-middle table-bordered'>";
			echo"<th colspan='3'><h1 align='center'>".$dado['nome_posto']."</h1></th>";
			echo"<tr></tr>";
			echo"<tr><td width='250px' >";
			if (empty ($dado['imagem']))
			{
				$imagem = '../img/SemImagem.png';
			}
			else
			{
				$imagem = $dado['imagem'];
			}
			echo "<img src='$imagem'>";
			echo "</td>";
			
			echo "<td class='align-middle'>";			
					
			echo "<b>Endereço: </b>".$dado['endereco'].", Nº".$dado['numero'].",<br> ";
			echo"".$dado['bairro']."-".$dado['cidade'].", ".$dado['uf']."- ".$dado['cep']."<br>";
			echo "<b>Telefone Fixo: </b>".$dado['telefone_fixo']."<br>";
			echo "<b>Telefone Celular</b>".$dado['telefone_cel']."<br>";
					
			echo "</td></tr></table>";

			mysqli_close($conexao);
			

		?>




	</main>
    



    <!--Scripts-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/505ccc358b.js" crossorigin="anonymous"></script>
</body>
</html>