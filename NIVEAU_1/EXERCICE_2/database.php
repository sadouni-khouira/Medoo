<? php
include_once ( "Medoo.php" );
utilisez  Medoo \ Medoo ;

// Initialisation
$ database = nouveau  Medoo ([
    'database_type' => 'mysql' ,
    'database_name' => 'connexion' ,
    'server' => 'localhost' ,
    'username' => 'racine' ,
    'mot de passe' => '' ,
    'charset' => 'utf8mb4'
]);
?>