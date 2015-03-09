<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            
            // != -> diferente
            // == -> igual
            // =  -> atribuição/recebe
            // && -> e
            // || -> ou
            
            if($nome != "" && $email != "" && $telefone != ""){
            
                echo "Nome: ".$nome;
                echo "<br>E-mail: ".$email;
                echo "<br>Telefone: ".$telefone;
                
                
                
                //alteração de timezone
                date_default_timezone_set("America/Sao_Paulo");
                
                //Gravação em arquivo txt
                //Abrir/Criar o arquivo
                $arquivo = fopen("dados.txt","a+");
                
                //escrever no arquivo
                fwrite($arquivo, "\r\nDados do Aluno - Cadastro realizado em: ".date("d/m/Y")." as ".date("H:i:s"));    
                fwrite($arquivo, "\r\nNome: ".$nome);
                fwrite($arquivo, "\r\nE-mail: ".$email);
                fwrite($arquivo, "\r\nTelefone: ".$telefone);
                
                fwrite($arquivo, "\r\n----------------------------\r\n\r\n");
                
                //fechar o arquivo
                fclose($arquivo);
                
            }else{
                echo "<strong>Preencha todos os campos!</strong>";
            }
            
        ?>
        <br>
        <a href="formulario1.php">Voltar</a>
    </body>
</html>
