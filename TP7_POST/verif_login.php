<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    $nom_utilisateur = $_POST["nom_utilisateur"];
    $mot_de_passe = $_POST["mot_de_passe"];

    function identifiants_correct() {
        global $nom_utilisateur, $mot_de_passe; // permet d'acceder aux variables qui sont en dehors de la fonction
        if ($nom_utilisateur === "Dupont" && $mot_de_passe === "alibaba") {
            return true;
        } else {
            return false;
        }
    }

    if (identifiants_correct()) {
        echo "<h1>LOGIN CORRECT</h1>";
    } else {
        header('Location: login.php?message=Identifiant ou mot de passe incorrect');
    }

?>


</body>
</html>