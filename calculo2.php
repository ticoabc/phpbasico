<!DOCTYPE html>
<html lang="en">
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
        input{
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
        <h1>Turi Sistemas</h1>
        <input type="text" placeholder="Município">
        <br><br>
        <input type="text" placeholder="Consumo Médio em kW">
        <br><br>
        <button>Calcular</button>
        <br><br><br><br>
        <input type="text" placeholder="Dim. do Sistema em kWp">
        
    </div>
</body>
</html>