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
    <!------------------------------------->
    
        <style>
   @import"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";     
  /*<!---  body {
        margin:0;
        padding: 0;
        font-family: sans-serif;
        background: url(image.jpg) no-repeat;
        background-size: cover;
    }---*/
.login_box {
            width: 280PX;
            position: absolute;
            top:50%;
            left:50%;
            transform : translate(-50%,-50%);
            color: white;
}

.login_box h1 {
                float: left;
                font-size: 40px;
                border-bottom: 6px solid #4caf50;
                margin-bottom: 50px;
                padding: 13px 0;
             }

  .textbox {
                width: 100%;
                overflow: hidden;
                font-size: 20px;
                padding: 8px 0;
                margin: 8px 0;
                border-bottom: 1px solid #4caf50;
               
                
             } 

.textbox i  {
                width: 26px;
                float: left;
                text-align: center;
             }

  .textbox input {
                border: none;
                outline: none;
                background: none;
                color: whiTe;
                font-size: 18px;
                width: 80px;
                float: left;
                margin: 0 10px;
             
             }   

.btn {
                width: 100%;
                background: none;
                
                
                border: 2px solid #4caf50;
                color: whiTe;
                
                padding: 5px ;
                font-size: 18px;
                cursor: pointer;
                margin: 12px 0;
             }           
    </style>
    
<!-------------------------------------------->
</head>

<body>
<h1>Connexion Utilisateur</h1>
    <fieldset>
        <legend>Connexion Utilisateur</legend>


        <!---------------------------------------
 <form action="jolieformulaire.php" method="post">
      <div class="login_box">
        <h1>Inscrir un utilisateur</h1>
        <div class="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>    
        <input type="text" placeholder="Username" name="user" value="">   
        </div>  
         <div class="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>    
        <input type="text" placeholder="@mail" name="mail" value="">   
        </div>
        <div class="textbox">
            <i class="fa fa-lock" aria-hidden="true"></i>   
            <input type="password" placeholder="password" name="mdp" value="">   
            </div> 
            <input class="btn"  type="button" name="submit" value="Valider">     
    </div>

  </form>-->
       
     <form action="jolieformulaire.php" method="post">
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


        } else {
            echo 'Il faut remplir les champs !';
        }
    }
    ?>
</body>

</html>