<?php

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    <form action="inscription.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required> <br>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" required> <br>
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" required> <br>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" required> <br>
        <label for="password2">Confirmer le mot de passe</label>
        <input type="password" name="password2" id="password2" required> <br>
        <button type="submit">S'inscrire</button>
    </form>
</body>
</html>
