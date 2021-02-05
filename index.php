<?php
session_start();

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form method="post" action="page1.php">

        <label for="passWord">mot de passe</label>
        <input type="password" id="passWord" name="pass">
        <button type="submit">valider</button>

    </form>

</body>
</html>

<?php

if(isset($_POST['error']) && $_POST['error'] === 1){
    echo "mot de pass incorrect";
}

?>