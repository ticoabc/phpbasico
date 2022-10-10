<html>
 <head>
  <title>Exercícios com While - PHP </title>
 </head>
 <body>
<form action="" method="get">
    Continua: <input type="text" name="password" /><br />
    <input type="submit" name="submit" value="Testar" />
</form>
<?php
    $continua = $_GET['password'];
    echo "3) Exiba linhas de texto até um máximo informado pelo usuário pela URL<br><br>";
    while ($continua != 's') {
        echo "linhas de texto<br>";
        }
        echo "Terminou...!";
?>
 </body>
</html>