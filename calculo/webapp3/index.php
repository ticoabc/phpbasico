<!DOCTYPE html>
<html lang="PT-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WebApp Teste 3</title>
        <style type="text/css">
			.carregando{
				color:#ff0000;
				display:none;
			}
		</style>
    </head>
    <body>
        <form name="" method="POST" action=""><br>
            <label for="">Selecione o Estado</label>
            <select name="iduf" id="iduf">
                <option value="">Selecione...</option>
                <?php
                require "conexao.php";
                    $result_uf = "SELECT * FROM tbestado  ORDER BY ASC";
                    $resultado_uf = mysqli_query($conn, $result_uf);
                    while($row_uf = mysqli_fetch_assoc($resultado_uf))
                    {?>
                    <option value="<?php echo $row_uf['iduf'];?>">
                                   <?php echo $row_uf['codigo_uf'];?>
								   <?php echo $row_uf['uf'];?>
                    </option><?php
                    }?>                    
            </select><br><br>

            <h3>Pesquisar Estados e Municípios</h3>
		    <form method="POST" id="form-pesquisa" action="">
                <label>Pesquisar Estado: </label>
                <input type="text" name="pesquisa" id="pesquisa" placeholder="Digite o nome">
                <label>Pesquisar Município: </label>
                <input type="text" name="pesquisa_muni" id="pesquisa_muni" placeholder="Digite o nome">
            </form>
        </form>
        <ul class="resultado"></ul>
        <ul class="resultado_muni"></ul><br>
        
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
		<script type="text/javascript" src="js/pesquisa.js"></script>
        <script type="text/javascript" src="js/pesquisa_muni.js"></script>

    </body>
</html>