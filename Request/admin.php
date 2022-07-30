<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canto do Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        session_start();

        if($_SESSION['usuario'] == "Admin"){
            $_SESSION['usuario'] = "Admininastrador";
        }
        
        echo  "<h1 id='comeco'>Bem Vindo ". $_SESSION['usuario']."!" ;
    ?>

    <img class="img"src="macacofds.gif" alt="">

    <audio preload="auto" autoplay loop>
        <source src="videoplayback.mp3" type="audio/mpeg"> 
        <p>Se vc está visualizando essa mensagem quer dizer
            que seu navegador não carregou áudio .mp3 
            Download aqui -> <a href="videoplayback.mp3">Áudio</a>
    </audio>
</body>
</html>