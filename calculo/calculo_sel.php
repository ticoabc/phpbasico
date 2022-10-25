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
    <form method="post" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF'] ?>">
        <select required="" placeholder="Selcione o Município...">
            <option> 
            <option value="4333" name="media_inso" id="media_inso" required="">São Bernardo do Campo</option>
        </select>
        <br><br>
        <!--<input type="text"  id="media_inso" name="media_inso" required="" placeholder="Município">-->
        <br><br>
        <input type="text" id="media_kw" name="media_kw" required="" placeholder="Consumo Médio em kW">
        <br><br>
        <button>Calcular</button>
        <br><br>
        <?php
            $media_inso = isset($_POST['media_inso']) ? $_POST['media_inso'] : false;
            $media_kw = isset($_POST['media_kw']) ? $_POST['media_kw'] : false;
            if (isset($media_inso) && $media_inso > 0 && isset($media_kw) && $media_kw > 0) {
                
                $conta = (($media_kw / 30 / $media_inso) / 0.8);
                
                $resultado = number_format($conta, 2, ".", ",");

                var_dump($media_kw);
                var_dump($media_inso);
                var_dump($conta);
                var_dump($resultado);
                echo '<h3>Sistema em kWp: '. $resultado .'</h3>';
            }
        ?>       
    </div>
</body>
</html>