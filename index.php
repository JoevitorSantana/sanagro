<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SanAgro | Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
        body {
            background-color: #59B952;
        }
        section#cabecalho {
            text-align: center;
            position: initial;
            font-family: 'Poppins', sans-serif;
            color: white;
            font-size: 20pt;
            margin-top: 80px;            
        }
        section#login-box {
            background-color: white;
            width: 300px;
            height: 400px;
            margin: auto;
            margin-top: 0px;
            border-radius: 10px;
            box-shadow: 2px 2px 6px rgba(0, 0, 0,.5);
        }        
        header p {
            padding: 10px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #727376;
            font-size: 20pt;    
            border-bottom: 1px solid #727376;  
            
        }
        section#campos p{
            padding: 10px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #727376;                      
        }
        hgroup input {
            width: 100px;
            height: 30px;
            text-align: center;
            margin: 100px;
            background-color: #e6e7e8;  
            border: none;     
            border-radius: 5px; 
            color: #606062; 
            transition: .4s;     
            border: 0;
            border-bottom: 1px solid #ffffff;
        }
        hgroup input:hover {
            background-color: #bdbfc1
        }
        input.field {
            background-color:white;    
            border: 0;
            border-bottom: 1px solid #606062;
            text-transform: none;
            outline: 0;
        }

    </style>
</head>
<body>
<div>
    <section id="cabecalho">
        <p>SanAgro</p>
    </section>
    <section id="login-box">
        <header>
            <p>Login</p>
        </header>
        <section id="campos">
            <form action="valida.php" method="POST">
                <p>Usuário   <input class="field" type="text" id="cUser" name="tUser" size="20"></p>
                <p>Senha <input class="field"type="password" id="cSenha" name="tSenha"></p>
                <hgroup>
                    <a href="index2.html"><input type="submit" value="ENTRAR"></a>
                </hgroup>            
            </form>             
        </section>
    </section>
</div>
<?php
    if (!empty($_GET['Erro'])) 
    {
        if ($_GET['Erro']==1)
        {
        echo "Login ou senha - inválidos";
        }
    }
?>    
</body>
</html>