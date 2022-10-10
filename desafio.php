<?php 
    echo"1.Faça uma página que exiba:<br> hora e a frase “Bom dia”, “Boa tarde” 
            ou “Boa noite”, de acordo com a hora. 
                <br>Use a condicional if e a função date().";
    echo "<br>".date('h : i : s');
        if(date('e')){
            echo "<br>bom dia";
        }else{
            echo "boa noite";
        }
    echo "<br>2. Faça com que o calendário exiba o dia atual em negrito, usando a função
    date().";
    echo"<br>3.Exiba os domingos em vermelho e os sábados em negrito.";
    echo"<br>4.Faça o calendário começar em um dia que não seja um domingo";
    echo"<br>5.E um calendário do ano todo? Será que é muito complexo?";
?>