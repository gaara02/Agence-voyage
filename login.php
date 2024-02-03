<?php 
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=agenceVoyage;charset=utf8;', 'root', 'root');

if(isset($_POST['connecter'])) {
    if(!empty($_POST['email']) &&  !empty($_POST['password'])){
        $email = $_POST['email'];
        $mdp = sha1($_POST['password']);

        $recupUser = $bdd -> prepare('SELECT * FROM clients  WHERE email = ? AND mdp = ?');
        $recupUser->execute(array($email,$mdp));

        if($recupUser->rowCount()>0) {
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $mdp;
            $_SESSION["id"] = $recupUser -> fetch()['id'];
            $success_login = "Connexion reussi !";
            header('Location: success-login.php');

            

        }else {
            $error_message = "L'adresse e-mail ou le mot de passe est incorrect.";
        }
        

}
else {
    $error_login = 'Veuillez saisir tout les champ';
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
        <a href="home.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></i></a>
        <div class="row-page">

            <div class="login-col-input">
                <form method="POST">
                    <h1>Se Connecter</h1>
                    <h3>Bienvenue !<br>
                    Veuillez vous connecter pour continuer.</h3>
                    <label for="email" class="label1">Email</label>
                    <input type="email" name="email" id="email">
                    <label for="password">Mot De Passe</label>
                    <input type="password" name="password" id="password">
                    <button class="login-btn" name="connecter" type="submit">Se connecter</button>
                    <?php
                    if (isset($error_message)) {
                        echo '<div class="error-message">' . $error_message . '</div>';
                    }
                    ?>
                     <?php
                    if (isset($error_login)) {
                        echo '<div class="error-login">' . $error_login . '</div>';

                    }
                    ?>
                    <?php
                    if (isset($success_login)) {
                        echo '<div class="success-login">' . $success_login . '</div>';
                    }
                    ?>

                    <h4>Vous n'avez pas de compte?<a href="signUp.php"> S'inscrire</a></h4>

                </form>

            </div>
            <div class="login-col">
                <img src="img/plane4.jpg" alt="">

            </div>

            
        </div>
    </section>
    
    
</body>
</html>