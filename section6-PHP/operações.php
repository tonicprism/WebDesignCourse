<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Section 6 - Operações</title>
    <!--Imagem na aba do navegador-->
    <link rel="shortcut icon" href="./public/img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <?php 
        // Função que realiza operações
        function oper($tipoOper, $valor1, $valor2){
            switch ($tipoOper) {
                case '+':
                    return $valor1+$valor2;
                case '-':
                     return $valor1-$valor2;  
                case '*':
                    return $valor1*$valor2;
                case '/':
                    return $valor1/$valor2;
            }   
        };
        echo "
        <div class=\"container\">
            <h1 class='display-1'> 
                Testando soma: <p style=\"color: red\">".oper("+", 2, 3)."</p> 
            </h1>
            <h1 class='display-1'> 
                Testando multiplicação: <p style=\"color: red\">".oper("*", 2,3)."</p> 
            </h1>
            <h1 class='display-1'> 
                Testando subtração: <p style=\"color: red\">".oper("-", 2,3)."</p> 
            </h1>
            <h1 class='display-1'>
                Testando divisão: <p style='color: red'>".oper("/", 8,2)."</p>
            </h1>
        </div>
        "
    
    
    
    ?>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>