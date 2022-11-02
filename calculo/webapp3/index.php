<?php include_once ("conexao.php");?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
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
            <select name="codigo_uf" id="codigo_uf">
                <option value="">Selecione...</option>
                <?php
                require "conexao.php";
                    $result_uf = "SELECT * FROM estados";
                    $resultado_uf = mysqli_query($conn, $result_uf);
                    while($row_uf = mysqli_fetch_assoc($resultado_uf))
                    {?>
                    <option value="<?php echo $row_uf['codigo_uf'];?>">
                                   <?php echo $row_uf['uf'];?>
                    </option><?php
                    }?>                    
            </select><br><br>

            <label>Escolha o Município</label>
			<span class="carregando">Aguarde, carregando...</span>
			<select name="id_municipios" id="id_municipios">
				<option value="">Selecione...</option>
			</select><br><br>
			
			<input type="submit" value="Pesquisar">

        </form>
        <?php
			if($_SERVER['REQUEST_METHOD']=='POST'){
				$codigo_uf = $_POST['codigo_uf'];
				$id_municipios = $_POST['id_municipios'];
				
				$result_pesquisar = "SELECT nome FROM municipios WHERE estados='$codigo_uf' AND municipios='$id_municipios'";
				var_dump($result_pesquisar);

				$resultado_pesquisar = mysqli_query($conn, $result_pesquisar);
				var_dump($resultado_pesquisar);

				while ($row_pesquisar = mysqli_fetch_assoc($resultado_pesquisar)){
					echo "Município: ".$row_pesquisar['nome'] . "<br>";
				}
				
			}
		?>

        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        
        <script type="text/javascript">
		$(function(){
			$('#codigo_uf').change(function(){
				if( $(this).val() ) {
					$('#id_municipios').hide();
					$('.carregando').show();
					$.getJSON('uf_munici.php?search=',{codigo_uf: $(this).val(), ajax: 'true'}, function(j){
						var options = '<option value="">Selecione</option>';	
						for (var i = 0; i < j.length; i++) {
							options += '<option value="' + j[i].id + '">' + j[i].nome + '</option>';
						}	
						$('#id_municipios').html(options).show();
						$('.carregando').hide();
					});
				} else {
					$('#id_municipios').html('<option value="">– Escolha o Município –</option>');
				}
			});
		});
		</script>
    </body>
</html>