<?php 
//Incluir a conexão com banco de dados
include_once 'conexao.php';

$uf = filter_input(INPUT_POST, 'palavra');

//Pesquisar no banco de dados nome do usuario referente a palavra digitada
$result_user = "SELECT * FROM tbestado WHERE uf LIKE '%$uf%' LIMIT 1";
$resultado_user = mysqli_query($conn, $result_user);

if(($resultado_user) AND ($resultado_user->num_rows != 0 )){
	while($row_user = mysqli_fetch_assoc($resultado_user)){
		echo "<li>".$row_user['uf']."</li>";
	}
}else{
	echo "Nenhuma uf encontrada ...";
}
?>