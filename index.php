<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesbuk</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">
    <header>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1>Bienvenue sur Pesbuk</h1>
                        <p>Rejoignez des millions d'autres personnes...</p>
                    </div>
                    <div class="col-md-4">
                        <a href="login.php" class="btn btn-secondary">Se connecter</a>
                        <a href="register.php" class="btn btn-success">S'inscrire</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img class="img img-responsive" src="img/connect.png" />
                </div>
            </div>
        </div>
    </section>

<!-- index.php -->
<?php
// ... Autres parties du code ...

// Vérifiez si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérez les données du formulaire
    $project_title = $_POST["project_title"];
    $project_description = $_POST["project_description"];

    // Ajoutez le nouveau projet à la liste
    $new_project = [
        'title' => $project_title,
        'description' => $project_description,
        // ... Ajoutez d'autres données du projet si nécessaire ...
    ];

    // Ajoutez le nouveau projet à la liste existante
    $projects[] = $new_project;
}
?>

<!-- ... Le reste de votre code ... -->

    
</body>
</html>
