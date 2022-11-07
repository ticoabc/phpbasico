<?php include_once("conexao.php");

	$codigo_uf = $_REQUEST['iduf'];
	
	$result_uf = "SELECT * FROM tbestado WHERE iduf ORDER BY ASC";
	$resultado_uf = mysqli_query($conn, $result_uf);
	
	while ($row_uf = mysqli_fetch_assoc($resultado_uf) ) {
		$resultado_uf[] = array(
			'iduf' => $row_uf['iduf'],
			'uf' => utf8_encode($row_uf['uf']),
		);
	}
	
	echo(json_encode($resultado_uf));
