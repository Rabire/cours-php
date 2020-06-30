<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Connexion</h1>
    <form action="verif_login.php" method="post">
        <p>Votre nom d'utilisateur: <input type="text" name="nom_utilisateur" /></p>
        <p>Votre mot de passe : <input type="password" name="mot_de_passe" /></p>
        <p><input type="submit" value="Verifier"></p>
    </form>

    <?php
        echo "<h2>" . $_GET['message'] . "</h2>";
    ?>
</body>
</html>