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
    <!--DataTables-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
  

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
                        <a class="nav-item nav-link" href="../views/consulta.php" id="clasificado-menu">Clasificado</a>
                        <a class="nav-item nav-link" href="#" id="serviço-menu">Serviço</a>
                        <a class="nav-item nav-link" href="#" id="contato-menu">Contato</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div class = "container" id="main">

        <div class = "row" id="title">
            <div class = "col s12 m8 push -m2">
                <h1 align='center'> Preços Cadastrados </h1>
            </div>
            
            <table class="table table-hover" id="dados">
                <thead class="table-dark">
                    <tr >
                        <th scope="col"> Nome do Posto </th>
                        <th scope="col"> Etanol Comum </th>
                        <th scope="col"> Etanol Aditivado </th>
                        <th scope="col"> Gasolina Comum </th>
                        <th scope="col"> Gasolina Aditivada </th>
                        <th scope="col"> Diesel S10 </th>
                        <th scope="col"> GNV </th>
                        
                    </tr>
                </thead>
                
                <tbody >
                    <?php
                    include_once('../class/conexao.php');
                    $sqlinsert = "SELECT po.id, po.nome_posto, pr.etanol_comum, pr.etanol_adit, pr.gasolina_comum, pr.gasolina_adit, pr.diesel_s10, pr.gnv
                            FROM postos po inner join precos pr on po.id = pr.id_posto
                            ORDER by po.nome_posto;";
                    $resultado = mysqli_query($conexao, $sqlinsert);

                    if(mysqli_num_rows($resultado) > 0)
                    {
                        while ($dados = mysqli_fetch_array($resultado))
                        {
                            echo "<tr>";						
                            $id = $dados['id'];
                            echo "<td><a href='detalhes.php?id=$id'>".$dados['nome_posto']."</a></td>";
                            echo "<td> R$ ".$dados['etanol_comum']."</td>";
                            echo "<td> R$ ".$dados['etanol_adit']."</td>";
                            echo "<td> R$ ".$dados['gasolina_comum']."</td>";
                            echo "<td> R$ ".$dados['gasolina_adit']."</td>";
                            echo "<td> R$ ".$dados['diesel_s10']."</td>";
                            echo "<td> R$ ".$dados['gnv']."</td>";

                        }
                            
                    }	
                    echo "</tbody>";
                    echo "</table>";
                    mysqli_close($conexao);
                    ?>
            <br>
            
        </div>
	</div>


  <!--Scripts-->  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js">	</script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!--Font Awesome-->
  <script src="https://kit.fontawesome.com/505ccc358b.js" crossorigin="anonymous"></script>

  <script>
  $(document).ready(function(){
      $('#dados').DataTable({
        	"language": {
                "lengthMenu": "Mostrando _MENU_ registros por página",
                "zeroRecords": "Nada encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(filtrado de _MAX_ registros no total)"
            }
        });
  });
  </script>

  
</body>
</html>