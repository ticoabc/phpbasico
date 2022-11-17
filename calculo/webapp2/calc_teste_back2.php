<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WebApp2 - Analítico</title>
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
            <img alt="" src="img\home.png" width="50" height="50"></a><br><br>
            <?php                
                #########Constantes Provisórias##########
                #      Padrão de Entrada = 2 Fases      #
                #      Custo Energia = 0,65649 Kw/h     #
                #      Taxa de Desempenho = 0,72        #
                #      Potência por Módulo = 275 Wp     #
                #########################################                
                //require "conexao.php";
                //$idinsola = $_POST['nome'];                
                $idinsola = $_POST['idinsola'];
                $gasto = $_POST['gasto'];
                $faseentrada = 2;
                $custoenergia = 0.65649;
                $txdesempenho = 0.72;
                $potmodulo = 275;

                #Consumo Mensal Médio
                $consmensmedio = $gasto / $custoenergia;
                $resultado0 = number_format($consmensmedio, 2, ".", ",");
                
                #Consumo Médio Corrigido
                $resultado1 = $resultado0 - 50;

                #Consumo Anual Médio
                $resultado2 = $resultado1 * 12;

                #Potência Necessária
                $potnecessaria = ($resultado1 / (30 * $idinsola * $txdesempenho))*1000;
                $resultado3 = number_format($potnecessaria, 3, ".", ",");

                #Quantidade de Módulos
                $quantmod = (($resultado3 / ($potmodulo ))*1000);
                $resultado4 = number_format($quantmod, 0, ".", ",");

                #Potência Gerador
                $potenciagera = (($potmodulo * ($resultado4 / 1000)));
                $resultado5 = number_format($potenciagera, 3, ".", ",");

                #Inversor Potência Mínima
                $inversor = $potenciagera / 1.05;
                $resultado6 = number_format($inversor, 2, ".", ",");

                #Geração Média Estimada
                $geracao = (($resultado5 * $idinsola * $txdesempenho * 30) / 1000);
                $resultado7 = number_format($geracao, 2, ".", ",");

                #Geração Anual Média
                $resultado8 = $resultado7 * 12;

                #Relação Geração/Consumo
                $relacao = ($resultado8 / $resultado2) * 100;
                $resultado9 = number_format($relacao, 1, ".", ",");

                echo 'Projeto Energia Fotovoltaica';                
                echo '<h5>Consumo Mensal Médio em kWh/mês: '.$resultado0.'</h5>';
                echo '<h5>Consumo Médio Corrigido em kWh: '.$resultado1.'</h5>';
                echo '<h5>Potência Necessária: '.$resultado3.' kWp</h5>';
                echo '<h5>Quantidade de Módulos: '.$resultado4.'</h5>';
                echo '<h5>Potência Gerador: '.$resultado5.' kWp</h5>';
                echo '<h5>Inversor Potência Mínima: '.$resultado6.' kW</h5>';
                echo '<h5>Geração Média Estimada kWp/mês: '.$resultado7.'</h5>';
                echo '<h5>Consumo Anual Médio em R$: '. $resultado2 .'</h5>';
                echo '<h5>Geração Anual Média Estimada kW/h: '.$resultado8.'</h5>';
                echo '<h5>Relação Geração/Consumo: '.$resultado9.' (%)</h5>';
                //var_dump($idinsola);
                //var_dump($gasto);                
                //var_dump($conta);
                //var_dump($resultado);
            ?>
            
            <center>
                <img alt="" src="img\Logo_DIIAV.png" width="50" height="40">
                <img alt="" src="img\Logo_LABREN.png" width="80" height="40">                
            </center>
        </div>
    </body>
</html>