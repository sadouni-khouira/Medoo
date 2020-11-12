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
    <fieldset>
        <legend>Connexion Utilisateur</legend>
        <form action="CRUD.php" method="post">
            <label>Login :</label>
            <input type="text" name="user" required />

            <br>
            <label>e_mail</label>
            <input type="e-mail" name="mail" required />
            <br>
            <label>Password</label>
            <input type="password" name="mdp" required />

            <br>
            <input type="submit" name='submit' value="valider">
    </fieldset>
    </form>
    <?php
    if (isset($_POST['submit'])) {


        if (isset($_POST['mail']) && isset($_POST['mdp']) && isset($_POST['user'])) {



            $nom = $_POST['user'];
            $mdp = $_POST['mdp'];
            $mail = $_POST['mail'];
            $passwordHash = password_hash($mdp, PASSWORD_DEFAULT);

            $database->insert('connexions', [
                'nom' => $nom,
                'e_mail' => $mail,
                'MOT_DE_PASS' => $passwordHash,
            ]);


            //---------------Sélectionnez toutes les colonnes
            $datas = $database->select("connexions", "*");
            var_dump($datas);

            // Sélectionnez une colonne
            $datas = $database->select("connexions", ["id", "nom", "e_mail"], ["nom" => "khouira"]);
            var_dump($datas);

            // ------------AFFICHER LE CONTENUE D'UNE COLONNE----------
            $data = $database->get('connexions', '*', ['nom' => "khouira"]);
            var_dump($data);
            echo "la liste des champs !";
           
            // --------------- suppression-----------
            $database->delete("connexions", ["id" => 36]);
            echo "le compte de fouzia est supprimé !";


            //--------------Renvoie l'ID de la dernière ligne insérée--- 
            $database->insert("connexions", [
                "nom" => "toto",
                "e_mail" => "foo@bar.com",
                'MOT_DE_PASS' => "25",

            ]);

            $account_id = $database->id();
            var_dump($account_id);
            
            //--------MODIFICATION----------  
            $data = $database->update("connexions", [
                "e_mail" => "kadsad@outlook.fr"
            ], [
                "nom" => "khouira"
            ]);
            //------------------- */
        } else {
            echo 'Il faut remplir les champs !';
        }
    }
    ?>
</body>

</html>