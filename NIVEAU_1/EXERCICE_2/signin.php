<?php

// On requiere Dbh pour pouvoir se servir de $ database
require_once 'Dbh.php' ;

// On vérifie que le bouton submit a été cliqué
if (isset($_POST["submit"])) {

    // Les tests servent à vérifier la validité des entrées du formulaire
    $lastname =htmlspecialchars ($_POST [ "lastname" ]);
    $isValidLastname =!empty( $nom );

  

    $password = htmlspecialchars ($_POST["password" ]);
    $password_confirm = htmlspecialchars ($_POST ["password_confirm"]);
    $isValidPassword =!empty( $password ) && $password === $password_confirm ;
    $passwordHash = password_hash($_POST["password"], PASSWORD_DEFAULT );

 
    $success = $isValidLastname && $isValidPassword  ;

    // Si toutes les entrées sont valides
    if ( $success ) {

        // On fait une requête get avec medoo: c'est l'équivalent de SELECT * FROM users WHERE email = $ email + fetch ()
        $data = $database-> get ('connexions' , '*' , [
            'nom' => $nom,
             'MOT_DE_PASS'=>$passwordHash   ,
        ]);

        if (!$data ) {
            // On a pas trouvé l'email dans la base de donnée on peut donc insérer un nouvel utilisateur

            // On fait une requête insert avec medoo: c'est l'équivalent de INSERT INTO users lname, fname, email, password, status VALUES (?,?,?,?,?) + Execute ()
            $database -> insert ('connexions' , [
                'nom' => $_POST [ "lastname" ],
                
                'MOT_DE_PASS' => $passwordHash ,
                
            ]);
        } else {
            echo  "ce nom existe déjà!" ;
        }
    }
}

?>

<!DOCTYPE html >
<html  lang = " fr" >

<header>
    <meta  charset = " UTF-8 " >
    <meta  name = " viewport " content = " width = device-width, initial-scale = 1.0 " >
    <title > Document </title >
</header>

<body >
    <form  action = " signin.php " method = " post " >
        <p >
            <label > Nom: </label >
            <input  type = " text " name = "lastname " id = "lastname " >
        </p>
       
        <p >
            <label > Mot de passe: </label >
            <input  type = "text" name = "password" >
        </p>
        <p>
            <label > Confirmation du mot de passe: </label >
            <input  type = "text " name = "password_confirm"  >
        </p>
      
        <p>
            <input  type = "submit"  value = " Valider " name ="submit" >
        </p >
    </form >
    <?php  if ( isset ($ _POST["submit" ]) &&  !$succès ) { ?>
        <p> Une erreur est survenue. </p >
    <?php } ?>
</body >

</html >
