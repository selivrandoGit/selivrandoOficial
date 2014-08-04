<!doctype html>
<html>
    <head>        
        <title> Formulário de Login </title>
        <meta charset="UTF-8">  
         <script type="text/javascript" src="js/validaEmail.js"></script>
    </head>
<body>
    <h3> Formulário de Login </h3>
    
    <form name="Login" method="post" action="login.php"> 
        
    <label> Email:</label><input type="email" name="email" required />
    <labe> Senha: </labe><input type="password" name="senha" /> <br/>
    <a href="frmcadastro2.php"> Cadastre-se </a> <br>
    <a href="recuperar.php" onclick="validaEmail();"> Esqueceu sua senha? </a> <br>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>