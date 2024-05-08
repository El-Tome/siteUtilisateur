<?php

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connection</title>
</head>
<body>
    <h1>Connection</h1>
    <form action="connection.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required> <br>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" required> <br>
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
