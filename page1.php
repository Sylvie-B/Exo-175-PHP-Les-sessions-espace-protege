<?php
session_start();

if(isset($_POST['pass'])){
    $ref = $_POST['pass'];
    if('lemot' !== $ref){
        header('location: index.php?error=1');
    }
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>secure page</title>
</head>
<body>
    <div>mot de passe correct</div>
</body>
</html>
