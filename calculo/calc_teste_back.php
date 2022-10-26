<?php
 
$municipios = $_POST['municipio'];
$media_kw = $_POST['media_kw'];

echo '<br>';
echo '<h4>Média do Município: '.$municipios.'</h4>';
echo '<h4>Consumo Médio: '.$media_kw.'</h4>';

$conta = (($media_kw / 30 / $municipios) / 0.8);
                
$resultado = number_format($conta, 2, ".", ",");

//var_dump($media_kw);
//ar_dump($media_inso);
//var_dump($conta);
//var_dump($resultado);

echo '<h4>Sistema em kWp: '. $resultado .'</h4>';

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
