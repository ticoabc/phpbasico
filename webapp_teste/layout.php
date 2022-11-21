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
                height: 10%;
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
                border-radius: 1px;
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
                border-radius: 1px;
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
            #      Custo Projeto R$ 0.5 / Wp        #
            #      Custo Instalação R$ 0.44 / Wp    #
            #      Custo Equipamentos R$ 3.78 / Wp  #
            #      Tempo Projeto 25 anos            #
            #      Inflação Média Energia Anual 9%  #
            #      IPCA Média Anual 6.47            #
            #      Rendimento Poupança Anual 7.00%  #
            #      Taxa Mínima p/ 1 fase  30 kWh    #
            #      Taxa Mínima p/ 2 fases 50 kWh    #
            #      Taxa Mínima p/ 3 fases 100 kWh   #
            #########################################

            $idinsola = $_POST['idinsola'];
            $gasto = $_POST['gasto'];
            $faseentrada = 2;
            $custoenergia = 0.65649;
            $txdesempenho = 0.72;
            $potmodulo = 270;
            $tx1fase = 30;
            $tx2fases = 50;
            $tx3fases = 100;
            $mesesdoano = 12;

            #Consumo Mensal Médio
            $consmensmedio = $gasto / $custoenergia;
            $resultado0 = number_format($consmensmedio, 2, ".", ",");

            #Consumo Médio Corrigido
            $resultado1 = $resultado0 - 50;
            #$resultado1 = number_format($resultado1, 2, ",", ".");

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

            #Potência Gerador para 30%
            $Gerar30 = $potenciagera * 0.3;
            $resultado12 = number_format($Gerar30, 3, ".", ",");
            
            #Potência Gerador para 50%
            $Gerar50 = $potenciagera * 0.5;
            $resultado13 = number_format($Gerar50, 3, ".", ",");
            
            #Potência Gerador para 70%
            $Gerar70 = $potenciagera * 0.7;
            $resultado14 = number_format($Gerar70, 3, ".", ",");

            #Custo Mínimo Projeto
            $customin = (0.5 + 0.44 + 3.78) *  $potenciagera * 1000;
            $resultado15 = number_format($customin, 2, ",", " ");

            #Valor Energia Novo
            $valornovo = $tx2fases * $custoenergia;
            $resultado16 = number_format($valornovo, 2, ".", ",");

            #Valor Energia Concessionária
            $valorenerconc = $consmensmedio * $custoenergia;
            $resultado17 = number_format($valorenerconc, 2, ".", ",");

            #Retorno 1º ano
            $ret1ano = ($resultado17 - $resultado16) * $mesesdoano;
            $resultado18 = number_format($ret1ano, 2, ",", " ");

            ?>
            <div class="container">
                <div class="col-md-10"></div>
                <div class="titulo"></div>
                <div class="op1">
                <img alt="" src="img/placa_cel.png" width="50" height="50"><br>
                    <?php
                        echo '1 - Potência instalada '.$resultado1.' kW';                       
                    ?>
                </div>                
                <div class="op2">
                <img alt="" src="img/1.painel.png" width="50" height="50"><br>
                    <?php
                        echo '2 - Área mínima necessária: '.$resultado10.' m2';
                    ?>                    
                </div>
                <div class="op1">
                <img alt="" src="img/1.payback.png" width="50" height="50"><br>
                    <?php
                        #echo '3 - Valor aproximado do sistema: '..' kWp';
                        #echo 'Sistema em 30%: '.$resultado12.' kWp';
                        #echo '<br>Sistema em 50%: '.$resultado13.' kWp';
                        #echo '<br>Sistema em 70%: '.$resultado14.' kWp';
                        echo '3 - Custo Teórico do Projeto R$ '.$resultado15.'';
                    ?>
                </div>
                <div class="op2">
                <img alt="" src="img/1.painel_bat.png" width="50" height="50"><br>
                    <?php
                        echo '4 - Produção mensal: '.$resultado7.' kWh/mês';
                    ?>
                </div>
                <div class="op1">
                <img alt="" src="img/2.payback.png" width="50" height="50"><br>
                    <?php
                        echo '5 - Economia anual aproximada R$ '.$resultado18;
                    ?>
                </div>
                <div class="op2">
                <img alt="" src="img/0.payback.png" width="50" height="50"><br>
                    <?php
                        echo '6 - Tempo aproximado de retorno do investimento';
                    ?>
                </div>
            </div>
        </form>
    </body>
</html>