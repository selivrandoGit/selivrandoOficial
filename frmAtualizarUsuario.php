<!DOCTYPE html>
<html>
    <head>
        <title> Formulário </title>
        <meta charset="utf-8">
         <script type="text/javascript">
             function Validacao(){
                if (Cadastro.email.value !== Cadastro.confemail.value){
                alert ("Email não confere!");
                return false;}
            else if (Cadastro.senha.value !== Cadastro.confsenha.value){
                alert ("Senha não confere!");
                return false;}
        }
        </script>
    </head>    
    <body>
        <?php
              include 'conexao/conecta.inc';
              $codigo_usuario = $_REQUEST['codigo'];              
              //echo '<h1>'.$codigo_usuario.'</h1>';
              $sql = "SELECT * FROM usuario WHERE COD_USUARIO ='$codigo_usuario'";
              $result = mysql_query($sql);
              $usuarios = mysql_fetch_array($result);
        ?>
        
        <form action="atualizar.php" method="post">
             <input type="hidden" name="codigo" value="<?php echo $usuarios['COD_USUARIO']; ?>" />
           Nome: <input type="text" name="nome" required  value="<?php echo $usuarios['NOME_USUARIO'] ?>"> <br/>
           Senha: <input type="password" name="senha" required value="<?php echo $usuarios['SENHA_USUARIO']?>"> <br/>
           Conf. Senha: <input type="password" name="confsenha" required > <br/>
           Email: <input type="email" name="email" required value="<?php echo $usuarios['EMAIL_USUARIO']?>"> <br/>
           Conf. Email: <input type="email" name="confemail" required > <br/>
           Tipo de usuário:
              <select name="tipo">
           <?php 
              $tipo = $usuarios['TIPO_USUARIO'];
               if($tipo === 'ADM')
               {
                   echo '<option selected> ADM </option>';
                   echo '<option> RES </option>';
               }
               else
               {
                 echo '<option selected> RES </option>';  
                 echo '<option> ADM </option>';
               }
              ?>
            </select> <br/>
           CPF: <input type="text" name="cpf" required><br/>
           Logradouro: <input type="text" name="logradouro" required> <br/>
           CEP: <input type="text" name="cep" required><br/>
           <input type="submit" onclick="return Validacao()" value="Atualizar" >
           </form>
        
        
    </body>
</html>