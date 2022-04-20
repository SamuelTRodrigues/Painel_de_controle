<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            background-image: linear-gradient(45deg, #0346aa,  #0346aa);
        }
        div{
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            top:50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: #FFBF00;
        }
        input{
            padding : 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: #0346aa;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px ;
            font-size: 15px;
            color: black;
        }
        .inputSubmit:hover{
            background-color: #FFBF00;
           cursor: pointer;
        }
    </style>
</head>
<body>
    <div>
        <h1>Login</h1>
        <form action="textLogin.php" method= "POST" >
        <input type="text" name="email" placeholder="Email">
        <br><br>
        <input type="password" name="senha"  placeholder="Senha">
        <br><br>
        <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>