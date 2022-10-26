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
            <?php
                $municipios = $_POST['municipio'];
                $media_kw = $_POST['media_kw'];
                echo '<br>';
                echo '<h4>Média de Radiância do Município: '.$municipios.'</h4>';
                echo '<h4>Consumo Médio em kW/h: '.$media_kw.'</h4>';
                $conta = (($media_kw / 30 / $municipios) / 0.8);
                $resultado = number_format($conta, 2, ".", ",");
                echo '<h4>Sistema Estimado em kWp: '. $resultado .'</h4>';
                //echo '<a href="calc_teste.php">
                        //<img border="0" alt="SpotUp" src="img\home.png" width="50" height="50"></a>';

                //var_dump($media_kw);
                //ar_dump($media_inso);
                //var_dump($conta);
                //var_dump($resultado);
                /*
                Hora de Sol Pleno ou Hora de Sol Pico (HSP) é a insolação diária 
                (ou mensal, ou anual, dependendo da medida de tempo utilizada) que é 
                recebida por uma determinada superfície, levando-se em consideração 
                aspectos, como a localização específica, ângulo de inclinação e orientação.
                São o número de horas em que a irradiância solar deve ser constante e igual
                a 1000 W/m². Em outras palavras: o HSP/dia não significa a quantidade de horas 
                de sol em um dia e, sim, o equivalente a uma hora padrão de 1000 W/m².
                Os dados referentes à tabela HSP são obtidos nos chamados mapas solarimétricos e 
                no Brasil há boas opções como os elaborados pelo INPE (Instituto Nacional de Pesquisas Espaciais)
                e CRESESB (Centro de Referência para Energia Solar e Eólica Sérgio Brito)
                em parceria com o CEPEL (Centro de Pesquisas de Energia Elétrica).
                */
            ?>
        </div>
    </body>
</html>