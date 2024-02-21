<?php

require_once("config.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);
    
    // lier les paramètres à la requête
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // si l'utilisateur est enregistré
    if($user){
        // vérifier le mot de passe
        if(password_verify($password, $user["password"])){
            // créer une session
            session_start();
            $_SESSION["user"] = $user;
            // connexion réussie, rediriger vers la page de la timeline
            header("Location: timeline.php");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion à Pesbuk</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="index.php">Accueil</a></p>

        <h4>Connectez-vous à Pesbuk</h4>
        <p>Vous n'avez pas de compte? <a href="register.php">Inscrivez-vous ici</a></p>

        <form action="" method="POST">

            <div class="form-group">
                <label for="username">Nom d'utilisateur</label>
                <input class="form-control" type="text" name="username" placeholder="Nom d'utilisateur ou e-mail" />
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input class="form-control" type="password" name="password" placeholder="Mot de passe" />
            </div>

            <input type="submit" class="btn btn-success btn-block" name="login" value="Se connecter" />

        </form>
            
        </div>

        <div class="col-md-6">
            <!-- Contenu à ajouter ici -->
        </div>

    </div>
</div>
    
</body>
</html>
