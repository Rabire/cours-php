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
        <input type="text" name="nom_utilisateur" placeholder="Nom d'utilisateur"/>
        <input type="password" name="mot_de_passe" placeholder="Mot de passe"/>
        <p><input type="submit" class="btn" value="Verifier"></p>
    </form>

    <?php
        echo "<h2>" . $_GET['message'] . "</h2>";
    ?>
    
</body>
</html>