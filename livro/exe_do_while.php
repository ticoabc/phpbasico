<html>
 <head>
  <title>Do While PHP</title>
 </head>
 <body>
 <form action="" method="get">
  Contar até:  <input type="text" name="count">
  <input type="submit" name="submit" value="Testar">
 </form> 
 <?php
  $final = $_GET['count'];
  $contador = 1;
  do{
   echo "$contador <br>";
   $contador++;
  }while($contador<=$final);
 ?>
 </body>
</html>