<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turi Sistemas</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            
        }
        div{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input, select{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        button{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;            
        }
        button:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div>
    <form method="POST" action="calc_teste_back.php">
        <select name="dbcoord" required="" placeholder="">
            <option>Selcione o Município</option>
            <?php  
            require "conexao.php";
                $result_dbcoord = "SELECT * FROM dbcoord ORDER BY NAME ASC";
                $resultado_dbcoord = mysqli_query($conn, $result_dbcoord);
                while($row_dbcoord = mysqli_fetch_assoc($resultado_dbcoord))
                {?>
                <option value="<?php echo $row_dbcoord['idcoord'];?>">
                               <?php echo $row_dbcoord['NAME'];?>                               
                </option><?php
                }?>
            <?php
            ?>
        </select><br><br>
        <input type="text" id="media_kw" name="media_kw" required="" placeholder="Consumo Médio em kW">
        <br><br>
        <button>Calcular</button>
        <br><br>
        <!--<?php
            //include_once "calc_teste_back.php";
        ?>-->
    </div>
</body>
</html>
<!-- <select id="municipios" name="municipio" required="" placeholder="Selcione o Município...">
<option>Selcione o Município......</option>
<option value="4.53" required="">Município 1</option>
<option value="5.555" required="">Município 2</option>
<option value="3.333" required="">Município 3</option>
<option value="2.222" required="">Município 4</option>
</select>-->