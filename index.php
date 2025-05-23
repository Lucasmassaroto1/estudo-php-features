<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos PHP features</title>
</head>
<body>
    <!-- AULA 1 ARGUMENTOS NOMEADOS -->
    <!-- <?php 
        /* function sendEmail($destinatarios = "", $cc = "", $assunto = "", $mensagem = ""){
            echo "Destinatários: ".$destinatarios."<br>";
            echo "CC: ".$cc."<br>";
            echo "Assunto: ".$assunto."<br>";
            echo "Mensagem: ".$mensagem."<br>";
        }
        sendEmail(
            destinatarios: "lucasmassaroto17@gmail.com",
            cc: "powerdroid1717@gmail.com",
            assunto: "Argumentos nomeados",
            mensagem: "Dominando a features de argumentos nomeados do PHP 8"
        );
        echo '<hr>';
        // convencional -> respeitando a ordem dos parametros
        sendEmail(
            "lucasmassaroto17@gmail.com",
            "powerdroid1717@gmail.com",
            "Argumentos nomeados",
            "Dominando a features de argumentos nomeados do PHP 8"
        );
        echo '<hr>';
        sendEmail(
            "lucasmassaroto17@gmail.com",
            "Argumentos nomeados",
            "Dominando a features de argumentos nomeados do PHP 8"
        ); */
    ?> -->
    <!-- AULA 2 PROMOÇÃO DE PROPRIEDADE DE CONSTRUTOR -->
    <!-- <?php 
        /* class Produto{
            public string $nome = '';
            public float $value = 0;
            public function __construct($nome, $value){
                $this->nome = $nome;
                $this->value = $value;
            }
        }
        class Produto{
            public function __construct(
                public string $nome = '',
                public float $value = 0
            ){}
        }

        $produto = new Produto('celular', 1500);
        echo "Produto: ".$produto->nome;
        echo '<br>';
        echo 'Valor: '.$produto->value; */
    ?> -->
    <!-- AULA 3 COMBINANDO AS FEATURES DE "ARGUMENTOS" COM "PROPRIEDADE DE CONSTRUTOR"-->
    
    <!-- AULA 4 CORRESPONDÊNCIA DE EXPRESSÃO-->
    
    <!-- AULA 5 OPERADOR NULLSAFE-->
    
    <!-- AULA 6 COMPARAÇÕES MAIS SENSATAS ENTRE STRINGS E NÚMEROS-->
    
</body>
</html>