<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "dbcoordenadas";

//Criar e estabelecemos conexão com o banco de dados
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

#seleciona os dados da tabela
$query  = "SELECT idcoord3, nome, media FROM dbcoord3";
$query2 = "SELECT idcoord3, media FROM dbcoord3";

#verifica se existe registros no banco
$resultado_dbcoord = mysqli_query($conn, $query);
$resultado_dbcoord2 = mysqli_query($conn, $query2);
?>