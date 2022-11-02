<?php include_once("conexao.php");

	$codigo_uf = $_REQUEST['codigo_uf'];
	
	$result_uf_munici = "SELECT * FROM municipio WHERE codigo_uf ORDER BY nome";
	$resultado_uf_munici = mysqli_query($conn, $result_uf_munici);
	
	while ($row_uf_munici = mysqli_fetch_assoc($resultado_uf_munici) ) {
		$resultado_uf_munici[] = array(
			'id_municipios' => $row_uf_munici['id_municipios'],
			'nome' => utf8_encode($row_uf_munici['nome']),
		);
	}
	
	echo(json_encode($resultado_uf_munici));
