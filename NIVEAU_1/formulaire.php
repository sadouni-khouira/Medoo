<!DOCTYPE html>
<html lang="fr">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@600&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORMULARE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="CV.css">
    <script type="text/javascript" src="script.js"></script>
</head>
<style>
</style>
<body>
    <div class="container-fluid p-0">

        <header>

            <form method="POST" action="formulaire.php">
                <div class="form-group">
                    <label class="d-flex justify-content-center">Nom</label>
                    <input type="text" name="user" id="mail" placeholder="" class="form-control w-75 m-auto">
                </div>
                <div class="form-group">
                    <label class="d-flex justify-content-center">E-mail</label>
                    <input type="mail" name="mail" id="mail" placeholder="Monmail@gmail.com" class="form-control w-75 m-auto">
                </div>
                <div class="form-group">
                    <label class="d-flex justify-content-center">Mot de passe:</label>
                    <input type="password" name="password" id="pass" placeholder="Votre mot de passe" class="form-control w-75 m-auto">
                </div>
                <div class="form-group">
                    <input type="submit" name="bouton" value="Valider" class="btn btn-primary d-flex justify-content-center"><br>
                    <a href="formulaire.php" class="d-flex justify-content-center">Mot de passe oublié</a>
                </div>
            </form>
    
    </div>
</body>

</html>