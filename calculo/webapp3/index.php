<?php
#chama o arquivo de configuração com o banco
require 'conexao.php';

#seleciona os dados da tabela dbcoord3
#$result_dbcoord = "SELECT * FROM dbcoord3 ORDER BY nome ASC";
$query  = "SELECT idcoord3, nome, media FROM dbcoord3 ORDER BY nome ASC";

# abaixo montamos um formulário em html
# e preenchemos o select com dados
#<?php echo $munic['media']

?>
<form name="dbcoord3" method="post" action=""><br>
    <label for="">Selecione um Município</label>
    <select>
        <option>Selecione...</option>
        <?php while($munic = mysqli_fetch_array($resultado_dbcoord)) { ?>
            <option value="<?php echo $munic['idcoord3'] ?>">
                           <?php echo $munic['nome'] ?>
            </option>
        <?php } ?>
    </select>
</form>