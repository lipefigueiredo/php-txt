<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php 
        
            echo "<h1>Olá Mundo!</h1>";
            
            //Declaração de variáveis
            $nome = "ANA maria peçanha";
            $idade = 20;
            $salario = 1800.50;
            
            $nome = mb_strtolower($nome,"utf-8"); //converte para minusculo    
            $nome = ucwords($nome); // converte a primeira letra da palavra
                                    
            //(.) serve para concatenar/juntar
            echo "Nome do aluno(a): ".$nome;
            echo "<br>Idade: ".$idade;
            
            //formata o grupo de número(numero,qtd de casas,separador dos decimais, separador do milhar)
            echo "<br>Salário: R$ ".number_format($salario,2,",",".");
                        
        ?>  
        
        <br>
        <a href="formulario1.php">Formulário 1</a>
        
    </body>
</html>
