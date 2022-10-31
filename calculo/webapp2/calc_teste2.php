<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Select </title>
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
        <img alt="SpotUp" src="img\Logo_INPE.png" width="80" height="80"><br><br>
        <form method="POST" action="calc_teste_back2.php">
            <select name="dbcoord3" required="" placeholder="">
                <option>Selcione o Município</option>
                <?php  
                require "conexao.php";                    
                    $result_dbcoord = "SELECT * FROM dbcoord3 ORDER BY nome ASC";
                    $resultado_dbcoord = mysqli_query($conn, $result_dbcoord);
                    while($row_dbcoord = mysqli_fetch_assoc($resultado_dbcoord))
                    {?>
                    <option value="<?php echo $row_dbcoord['idcoord3'];?>">
                                   <?php echo $row_dbcoord['nome'];?>                                   
                    </option><?php
                    }?>
                <?php
                ?>
            </select><br><br>
            <input type="text" id="media_kw" name="media_kw" required="" placeholder="Consumo Médio em kW">
            <br><br>
            <button>Calcular</button>
            <br><br>
        </form>
    </div>
</body>
</html>
