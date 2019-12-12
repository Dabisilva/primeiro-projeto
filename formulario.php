<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <?php
       $n = $_GET["tNome"];
       echo "<p>Olá ".$n.", muito obrigado pela mensagem. Se você viu isto quer dizer que funcionou :)</p>";
    ?>
</body>
</html>