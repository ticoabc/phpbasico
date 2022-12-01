<?php
session_start();
?>
<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WebApp2 - Financiamento</title>
        <style>
            body{
                font-family: Arial, Helvetica, sans-serif;
                align-content: center;
                align-items: center;
                color: #000;
                background-color: black;
            }
            div{
                align-items: center;
                align-content: center;
                background-color:#2E8B57;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                padding: 20px;
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
    <body class="center">
        <div>
            <a href="calc_teste2.php">
            <img alt="" src="img\home.png" width="50" height="50"></a>
            <a href="calc_teste_back3.php">
            <img alt="" src="img/2.payback.png" width="50" height="50"></a><br><br>
            <?php
                #########Constantes Provisórias##########
                #      Padrão de Entrada = 2 Fases      #
                #      Taxa Mínima = 50                 #
                #      Custo Energia = 0.65649 Kw/h     #
                #      Taxa de Desempenho = 0.72        #
                #      Potência por Módulo = 275 Wp     #
                #      Para Módulo de 270 Wp = 1.63 m2  #
                #      Para Módulo de 330 Wp = 1.95 m2  #
                #      Módulo de 270 Wp = 11.1 kg/mod   #
                #      Módulo de 330 Wp = 11.5 kg/mod   #
                #      Queda Produção Anual = 0.08%     #
                #      Inflação IPCA ano = 0.06%        #
                #########################################

                $custoenergia = 0.65649;
                $taxamin = 50;

                #Valor Energia Novo (Custo Energia * Taxa Mínima)
                $vlrenernovo = $custoenergia * $taxamin;
                $resultado0 = number_format($vlrenernovo, 2, ".", ",");

                #Valor Energia Conc.
                #$vlrenerconc = $_SESSION['$resultado0'] * $custoenergia;
                #$resultado1 = number_format($vlrenerconc, 2, ".", ",");
                #$vlrenerconc = $custoenergia;

                echo '<h4>Dados Econômicos</h5>';
                echo '<h5>Valor Energia Novo: '.$resultado0.'</h5><br>';
                #echo '<h5>Valor Energia Novo: '.$resultado1.'</h5>';



            
            ?>
        
    
        
            <center>
                <img alt="" src="img\Logo_DIIAV.png" width="55" height="40">
                <img alt="" src="img\Logo_LABREN.png" width="80" height="40">                
            </center>
        </div>
    </body>
</html>