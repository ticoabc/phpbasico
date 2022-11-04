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
                background-color: black;
            }
            div{
                background-color:#2F4F4F;
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
            <img alt="" src="img\Logo_INPE.png" width="80" height="80"><br><br>
            <form method="POST" action="calc_teste_back2.php">
                <select name="idinsola" required="" placeholder="">
                    <option value="">Selcione o Município</option>
                    <option value="4548" id="">São Bernardo do Campo</option>
                    <option value="5626">Santo André</option>
                    <option value="4641">São Caetano do Sul</option>
                    <option value="4596">Diadema</option>
                    <option value="4488">Mauá</option>                 
                </select><br><br>
                <input type="text" id="gasto" name="gasto" required="" placeholder="Gasto Mensal Médio em R$">
                <br><br>
                <button>Calcular</button>
                <br><br>
            </form>
        </div>
    </body>
</html>
