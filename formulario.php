<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/estilo.css">
    <link rel="stylesheet" href="CSS/Form.css">
    <title>Formulario</title>
    <style>
        p{
            font-size: 20pt;
            color: #80a2ff;
			text-shadow: 1px 1px 1px black;
        }
    </style>
</head>
<body>
    <div>
    <?php
       $n = $_GET["tNome"];
       echo "<p>Olá ".$n.", muito obrigado pela mensagem. Se você viu isto quer dizer que funcionou :)
             <br>Desculpe por ser algo tão simples mas estou estudando para fazer coisas ainda melhores</p>";
    ?>
    <a id="form" href="Formulario.html">Voltar</a>
    </div>
</body>
</html>