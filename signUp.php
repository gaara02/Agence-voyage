<?php 

$bdd = new PDO('mysql:host=localhost;dbname=agenceVoyage;charset=utf8;', 'root', 'root');

if(isset($_POST['sinscrire'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = sha1($_POST['password']);

    $insertUser = $bdd -> prepare('INSERT INTO clients(nom, prenom, email, mdp) VALUES(?,?,?,?)');
    $insertUser -> execute(array($nom,$prenom,$email,$mdp));

    if($insertUser -> rowCount()>0) {
        $success = "Inscription reussi. Veuillez vous connecter";
    }


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title></title>
</head>
<body class="login-page">

    <section class="login">
        <a href="login.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></i></a>
        <div class="row-page">

            <div class="login-col-input signup">
                <form method="POST" action="">
                    <h1>S'inscrire</h1>
                    <h3>Bienvenue !<br>
                    Veuillez vous inscrire pour continuer.</h3>
                    <label for="">Nom</label>
                    <input type="text" name="nom">
                    <label for="">Prenom</label>
                    <input type="text" name="prenom">
                    <label for="email" class="label1">Email</label>
                    <input type="email" name="email" id="email">
                    <label for="password">Mot De Passe</label>
                    <input type="password" name="password" id="password">
                    <button class="login-btn" type="submit" name="sinscrire">S'inscrire</button>
                    <?php
                        if(isset($success)) {
                            echo "<div class ='success-message'>".  $success . "</div>";
                        }
                    
                    ?>

                    <h4>Vous avez deja un compte?<a href="login.php"> Se Connecter</a></h4>
                </form>

            </div>
            <div class="login-col">
                <img src="img/plane6.jpg" alt="">

            </div>

            
        </div>
    </section>
    
    
</body>
</html>