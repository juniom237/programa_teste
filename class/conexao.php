<?php
$nome_servidor = 'localhost';
$nome_usuario = 'root';
$senha = '';
$nome_banco = 'projeto_tcc';
$conexao = mysqli_connect($nome_servidor, $nome_usuario, $senha, $nome_banco);

if(mysqli_connect_error())
{
	echo "Problema com a conexão do Banco de dados".mysqli_connect_error();
}


?>