<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WebApp2 - Test Select</title>
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
            <?php
                require "conexao.php";
                $dbcoord = $_POST['idcoord3'];
                $dbcoord = $_POST['nome'];
                $media_kw = $_POST['media_kw'];
                echo '<br>';
                echo '<h4>Município: '.$dbcoord.'</h4>';
                echo '<h4>Consumo Médio em kW/h: '.$media_kw.'</h4>';
                //$conta = (($media_kw / 30 / $dbcoord) / 0.8);
                //$resultado = number_format($conta, 9, ".", ",");
                //echo '<h4>Sistema Estimado em kWp: '. $resultado .'</h4>';
                
                //var_dump($media_kw);
                //var_dump($dbcoord);
                //var_dump($conta);
                //var_dump($resultado);                
            ?>
        </div>
    </body>
</html>