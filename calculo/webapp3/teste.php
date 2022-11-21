<!DOCTYPE html>
<html lang="PT-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Teste Layout</title>
		<style type="text/css">
	table {
	  border: 1px solid black;
	  font: 16px "Open Sans", Helvetica, Arial, sans-serif;
	  border-spacing: 0;
	  border-collapse: collapse;
	}

	th, td {
	  border: 1px solid black;
	  padding: 4px 6px;
	}

	th {
	  vertical-align: bottom;
	}

	thead > tr {
	  background-color: rgb(228, 240, 245);
	}

	thead > tr:nth-of-type(2) {
	  border-bottom: 2px solid black;
	}

	thead > tr:last-of-type > th:nth-of-type(1) {
	  background-color: rgb(225, 255, 225);
	}

	thead > tr:last-of-type > th:nth-of-type(2) {
	  background-color: rgb(255, 225, 225);
	}

	tbody > tr:nth-of-type(even) {
	  background-color: rgb(237, 238, 242);
	}

	tbody > tr > th:first-of-type {
	  text-align: left;
	  background-color: rgb(225, 229, 244);
	}

	tbody > tr > td:last-of-type {
	  text-align: right;
	}


	.carregando{
	color:#ff0000;
	display:none;
	}
	</style>
	</head>
	<body>

<table align = "center">
	<thead>
		<tr>
			<th colspan="3">Projeto Energia Fotovoltaica</th>
		</tr>
	</thead>
	<tbody>
		
		<tr>
            <td>Gasto Médio Mensal</td>
            <td align="center">
			<input type="text" name="gasto" value="" id="gasto"></td>
        </tr>
		
		<tr>
            <td>HSP</td>
            <td align="center">
			<input type="text" name="gasto" value="" id="gasto"></td>
			<td><input type="submit" name="calcula"></td>
        </tr>
		
		<tr>
            <td>Consumo Mensal Médio</td>
            <td> </td>
			<td> kWh/mês:</td>
        </tr>
	
		<tr>
            <td>Consumo Médio Corrigido</td>
            <td> </td>
			<td> kWh</td>
        </tr>
		
		<tr>
            <td>Potência Necessária</td>
            <td> </td>
			<td> kWp</td>
        </tr>
		
		<tr>
            <td>Quantidade de Módulos</td>
            <td> </td>
			<td>Placas</td>
        </tr>
	
		<tr>
            <td>Potência Gerador</td>
            <td> </td>
			<td>kWp</td>
        </tr>
		
		<tr>
            <td>Inversor Potência Mínima</td>
            <td> </td>
			<td>kW</td>
        </tr>
		
		<tr>
            <td>Inversor Potência Mínima</td>
            <td> </td>
			<td>kW</td>
        </tr>
		
		<tr>
            <td>Área Coberta</td>
            <td> </td>
			<td>m2</td>
        </tr>
		
		<tr>
            <td>Geração Média Estimada</td>
            <td> </td>
			<td>kWp/mês</td>
        </tr>
		
		<tr>
            <td>Consumo Anual Médio</td>
            <td> </td>
			<td>R$</td>
        </tr>
		
		<tr>
            <td>Geração Anual Média Estimada</td>
            <td> </td>
			<td>kW/h</td>
        </tr>
		
		<tr>
            <td>Relação Geração/Consumo</td>
            <td> </td>
			<td>%</td>
        </tr>		
		
	</tbody>
</table>

</body>
</html>

<?php                
#########Constantes Provisórias##########
#      Padrão de Entrada = 2 Fases      #
#      Custo Energia = 0,65649 Kw/h     #
#      Taxa de Desempenho = 0,72        #
#      Potência por Módulo = 275 Wp     #
#      Para Módulo de 270 Wp = 1.63 m2  #                
#      Para Módulo de 330 Wp = 1.95 m2  #
#      Módulo de 270 Wp = 11.1 kg/mod   #
#      Módulo de 330 Wp = 11.5 kg/mod   #
#########################################                
//require "conexao.php";
//$idinsola = $_POST['nome'];                
$idinsola = $_POST['idinsola'];
$gasto = $_POST['gasto'];
$faseentrada = 2;
$custoenergia = 0.65649;
$txdesempenho = 0.72;
$potmodulo = 270;

#Consumo Mensal Médio
$consmensmedio = $gasto / $custoenergia;
$resultado0 = number_format($consmensmedio, 2, ".", ",");

#Consumo Médio Corrigido
$resultado1 = $resultado0 - 50;

#Consumo Anual Médio
$resultado2 = $resultado1 * 12;

#Potência Necessária
$potnecessaria = ($resultado1 / (30 * $idinsola * $txdesempenho))*1000;
$resultado3 = number_format($potnecessaria, 2, ".", ",");

#Quantidade de Módulos
$quantmod = (($resultado3 / ($potmodulo ))*1000);
$resultado4 = number_format($quantmod, 0, ".", ",");

#Potência Gerador
$potenciagera = (($potmodulo * ($resultado4 / 1000)));
$resultado5 = number_format($potenciagera, 2, ".", ",");

#Inversor Potência Mínima
$inversor = $potenciagera / 1.05;
$resultado6 = number_format($inversor, 2, ".", ",");

#Área Coberta
if ($potmodulo <= 310) {
$areac = ($quantmod * 1.63) * 1.1;
$resultado10 = number_format($areac, 2, ".", ",");
}else {
$areac = ($quantmod * 1.95) * 1.1;
$resultado11 = number_format($areac, 2, ".", ",");
}

#Geração Média Estimada
$geracao = (($resultado5 * $idinsola * $txdesempenho * 30) / 1000);
$resultado7 = number_format($geracao, 2, ".", ",");

#Geração Anual Média
$resultado8 = $resultado7 * 12;

#Relação Geração/Consumo
$relacao = ($resultado8 / $resultado2) * 100;
$resultado9 = number_format($relacao, 1, ".", ",");
/*
echo 'Projeto Energia Fotovoltaica';                
echo '<h5>Consumo Mensal Médio em kWh/mês: '.$resultado0.'</h5>';
echo '<h5>Consumo Médio Corrigido em kWh: '.$resultado1.'</h5>';
echo '<h5>Potência Necessária: '.$resultado3.' kWp</h5>';
echo '<h5>Quantidade de Módulos: '.$resultado4.'</h5>';
echo '<h5>Potência Gerador: '.$resultado5.' kWp</h5>';
echo '<h5>Inversor Potência Mínima: '.$resultado6.' kW</h5>';
echo '<h5>Área Coberta: '.$resultado10.' m2</h5>';
echo '<h5>Geração Média Estimada kWp/mês: '.$resultado7.'</h5>';
echo '<h5>Consumo Anual Médio em R$: '. $resultado2 .'</h5>';
echo '<h5>Geração Anual Média Estimada kW/h: '.$resultado8.'</h5>';
echo '<h5>Relação Geração/Consumo: '.$resultado9.' (%)</h5>';*/
//var_dump($idinsola);
//var_dump($gasto);                
//var_dump($conta);
//var_dump($resultado);
?>
