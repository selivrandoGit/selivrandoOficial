<!doctype html>
<html>
    <head>        
        <title> Cadastre-se </title>
        <meta charset="UTF-8">
        <script type="text/javascript">
            function Validacao(){
                if (Cadastro.email.value !== Cadastro.confemail.value){
                alert ("Email não confere!");
                return false;
            }else if (Cadastro.nome.value ==""){
                alert ("Campo obrigatório");
                Cadastro.nome.focus();
                return false;            
            }else if (Cadastro.email.value ==""){
                alert ("Campo obrigatório");
                Cadastro.email.focus();
                return false;   
                
            }else if (Cadastro.confemail.value ==""){
                alert ("Campo obrigatório");
                Cadastro.confemail.focus();
                return false;   
            } else if (Cadastro.senha.value ==""){
                alert ("Campo obrigatório");
                Cadastro.senha.focus();
                return false;            
         
            }
            }
    
            </script>
        
    </head>
<body>
    <h3> Formulário de Cadastro </h3>
    
    <form name="Cadastro" method="post" action="inserirUsuario.php"> 
    <label> Nome:</label><input type="text" name="nome" /> <br/>
    <label> Email:</label><input type="email" name="email" /> <br/>
    <label> Confirme seu Email:</label><input type="confemail" name="confemail" />  <br/>
    <labe> Senha: </labe><input type="password" name="senha" /> <br/>  
    <input type="submit" onClick="return Validacao()"  value="Inserir" />
 
    </form>
</body>
</html>
