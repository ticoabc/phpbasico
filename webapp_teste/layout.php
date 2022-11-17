<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link rel="stylesheet" href="css/style.css">-->
        <title>DIV Lado a Lado</title>
    </head>
        <style>
            body{
                font-family: Arial, Helvetica, sans-serif;
                background-color: black;
            }
            
            div.container {
                height: 50%;
                background: black;
            }

            div.titulo {
                font-size: 5vw;                
                background-color: black;
                text-align: center;                
                padding: 3vw;
                position: relative;
                color: #fff;
            }

            div.op1 {
                background-color:#2E8B57;
                width: 50%;                
                padding: 5vw 0vw 5vw 0vw;
                display: inline-block;
                margin-right: 0vw;
                font-size: 2vw;
                text-align: center;
                min-width:40vw;
                border-radius: 15px;
                color: #fff;
            }
            div.op2 {
                background-color:#778899;
                width: 50%;
                padding: 5vw 0vw 5vw 0vw;
                display: inline-block;
                margin-right: 0vw;
                font-size: 2vw;
                text-align: center;                
                min-width:40vw;
                border-radius: 15px;
                float: right;
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
        <!--
            original
            div.op1{
                width: 50%;
                display: inline-block;
                background-color: #708090;
                font-size: 3vw;
                text-align: center;
                padding: 5vw 0vw 5vw 0vw;
                min-width:40vw;
                border-radius: 15px;            
            }div.op2{
                width: 50%;
                background-color: green;
                display: inline-block;
                margin-right: 0vw;
                font-size: 3vw;
                text-align: center;
                padding: 5vw 0vw 5vw 0vw;
                min-width:40vw;
                border-radius: 15px;
                float: right;
            }
        -->
    <body class="center">
        <form action="layout.php" method="POST">
            <div class="container">
                <div class="col-md-10"></div>
                <div class="titulo"></div>
                <div class="op1">
                <img alt="" src="img/placa_cel.png" width="50" height="50"><br>
                    <?php
                        echo '1 - Potência instalada';                       
                    ?>
                </div>                
                <div class="op2">
                <img alt="" src="img/1.painel.png" width="50" height="50"><br>
                    <?php
                        echo '2 - Área mínima necessária';
                    ?>                    
                </div>
                <div class="op1">
                <img alt="" src="img/1.payback.png" width="50" height="50"><br>
                    <?php
                        echo '3 - Valor aproximado do sistema e instalação';                       
                    ?>
                </div>
                <div class="op2">
                <img alt="" src="img/1.painel_bat.png" width="50" height="50"><br>
                    <?php
                        echo '4 - Produção mensal';
                    ?>
                </div>
                <div class="op1">
                <img alt="" src="img/2.payback.png" width="50" height="50"><br>
                    <?php
                        echo '5 - Economia anual aproximada';
                    ?>
                </div>
                <div class="op2">
                <img alt="" src="img/0.payback.png" width="50" height="50"><br>
                    <?php
                        echo '6 - Tempo aproximado de retorno do investimento';
                    ?>
                </div>
                <?php
                    #########Constantes Provisórias##########
                    #      Padrão de Entrada = 2 Fases      #
                    #      Custo Energia = 0,65649 Kw/h     #
                    #      Taxa de Desempenho = 0,72        #
                    #      Potência por Módulo = 275 Wp     #
                    #########################################
                ?>
            </div>
        </form>
    </body>
</html>