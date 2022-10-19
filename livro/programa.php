<?php
    echo "Na função date(), experimente mudar o Y para y. O que acontece?<br>" . "<br>Hoje é dia: ".date('d/m/Y');
    echo " - Mês: ".date(' F ')."<br>";
    echo "<br>Você consegue exibir a hora no formato de 12 horas, am e pm? - ";
    echo "agora são: ".date('A h:i:s');
    echo "<br><br>E se você tivesse que exibir o dia da semana? Como faria? ";
    echo date("<b> l </b>");
    echo "<br><br>Exiba quantos dias faltam para o próximo sábado. Por exemplo, se hoje for
    quarta, então faltam 3 dias para sábado.";
    echo "<br><br>hoje for quarta ".date(' ');
echo "<br><br>Exiba também o nome do mês atual -- ".date("<b> F </b>");
    ?>