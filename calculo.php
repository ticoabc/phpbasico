<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title>Exemplo</title>
<link rel="stylesheet" href="style.css">
<main >
    <div class="container">
        
        <div class="coluna-destaque-verde">
            
            <div class="linha">
                <!--<div class="linha">-->
                    <form class="coluna" name="calc" method="post" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF'] ?>">
                        <label for="Peso"> Peso
                            <input type="text" id="Peso" name="peso" required=""></label>
                        <label for="Altura"> Altura
                            <input type="text" id="Altura" name="altura" required=""></label>
                            <input type="submit" class="button-green" value="Calcular">
                    </form>
                </div>

                <div class="linha" id="resultado">
                    <?php
                    if (isset ($_POST)) {
                        $peso = isset($_POST['peso']) ? $_POST['peso'] : false;
                        $altura = isset($_POST['altura']) ? $_POST['altura'] : false;
                        if (isset($peso) && $peso > 0 && isset($altura) && $altura > 0) {
                            $conta1 = $altura * $altura;
                            $conta2 = $peso / $conta1;
                            $resultado = number_format($conta2, 2, ".", ",");

                            //var_dump($altura);
                            //var_dump($peso);

                            if (isset($resultado) && $resultado != '0') {
                                ;
                                echo '<h3>Seu IMC é: '. $resultado .'</h3>';
                                //echo '<h4>' . $resultado . '</h4>';
                            }else {
                                echo '<h3>Por favor, utilize apenas numeros!</h3>';
                            }
                            if (isset($resultado) && $resultado < 17) {
                                echo 'é menor que 17';
                            } 
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>