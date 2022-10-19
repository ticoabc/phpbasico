<?php
//Exercícios com While
echo "1) Exiba 10 linhas de um texto qualquer<br><br>";
    $rep1=1;
    $rep2=10;
    while ($rep1 <= 10) {
        echo "É necessário experimentar e praticar muitas vezes<br>";
        if ($rep1 > 10){
        }
        $rep1++;
    }
?>

<html>
    <head>
        <title>While PHP</title>
    </head>
    <body>
        <h5><br>2) Exiba linhas de texto até um máximo informado pelo usuário pela URL</h5>
        <form action="" method="get">
            Contar até:  <input type="text" name="count">
            <input type="submit" name="submit" value="Testar">
        </form> 
    <?php
    $final2 = $_GET['count'];
    $contador = 1;
    while ($contador<=$final2) {
        echo "$contador, linhas de texto <br>";
            $contador++;
        }
    ?>
 </body>
</html>

<?php
    echo "<br><br>3) Contador decrescente<br><br>";
    while ($rep2 > 0) {
        echo "$rep2 <br>";
        if ($rep2 > 0){
            $rep2--;
        }
    }
?>