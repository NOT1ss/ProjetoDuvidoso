<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleForm.css">
    <title>Formulário</title>
</head>
<body>
    <form method="GET">
        <label>
            Nome:
        </label>
        <input type="text" name="user">
        <br><br>
        <label>
            Senha:
        </label>
        <input type="password" name="pass">
        <br><br>
        <input class="Btn" type="submit" name="btn">
    </form>
</body>
</html>

<?php
$user = @$_REQUEST["user"]; //Vai requisitar o input do form
$pass = @$_REQUEST["pass"]; //Vai requisitar o input do form
$submit = @$_REQUEST["btn"]; //Vai requisitar o input do form


$user1 = "Admin";
$pass1 = "admin";

$user2 = "NOT";
$pass2 = "123";


if($submit){
    if($user == "" || $pass == ""){ //Se os campos estiverem em branco um alert aparecerá
        echo "<script>
                alert('Por favor, preencha todos os campos!');
              </script>";
    }else{
        if(($user == $user1 && $pass == $pass1) || ($user == $user2 && $pass == $pass2)){ //Se as credencias forem iguais o usuário irá logar
            session_start();

            $_SESSION['usuario'] = $user;
            $_SESSION['senha'] = $pass;
            header ("Location: admin.php");
        }else{ //Se as credencias não forem iguals um alert aparecerá
            echo "<script>
                    alert('Usuário/Senha inválidos, tente novamente!');
                  </script>";
        }
    }
}
?>