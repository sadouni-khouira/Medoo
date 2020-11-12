
<?php

// On requiere Dbh pour pouvoir se servir de $ database
require_once  'Dbh.php';
?>


<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>

<body>
    <h1>Connexion Utilisateur</h1>
    <form action="login.php" method="post">
        <label>Login :</label>
        <input type="text" name="utilisateur" required />
        <label>e_mail</label>
        <input type="e-mail" name="user" required />
        <label>Password</label>
        <input type="password" name="mdp" required />
        <input type="submit" name='submit' value="valider">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        if (isset($_POST['utilisateur']) && isset($_POST['mdp']) && isset($_POST['user']) {
            $nom = $_POST['utilisateur'];
            $mdp = $_POST['mdp'];
            $mail = $_POST['user'];
            $passwordHash = password_hash($mdp, PASSWORD_DEFAULT);

            $database->insert('connexions', [
                'nom' => $nom,
                'e_mail'=>$mail,
                'MOT_DE_PASS' => $passwordHash,
            ]);
        } else {
            echo 'Il faut remplir les champs !';
        }
    }
    ?>
</body>

</html>