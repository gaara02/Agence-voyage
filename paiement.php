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
<body>
   <section class="paiement">
    <div class="info-paiement">
        <a href="billet.php" class="a"><p class="retour"><i class="fa fa-chevron-left" aria-hidden="true"></i> Retour</p></a>
        <h2>Saisir vos informations de <br> paiement</h2>
        <form action="" method="post">
            <div class="paiement-input">
                <p>Numéro de carte</p>
                <i class="fa fa-credit-card" aria-hidden="true"></i>
                <input type="text" name="" id="" required>
            </div>
            <div class="paiement-input info-cart">
                <p>Date d'expiration</p>
                <input type="text" name="" id="" required>
                <input type="text" name="" id="" required placeholder="Cryptogramme">
            </div>
            <div class="paiement-input">
                <p>Prénom</p>
                <input type="text" name="" id="" required>
            </div>
            <div class="paiement-input">
                <p>Nom</p>
                <input type="text" name="" id="" required>
            </div>

            <div class="checkbox">
                <p class="condition">En cochant la case ci-dessous, vous acceptez nos <a href="">Conditions d'utilisation</a>, notre <a href="">Déclaration de confidentialité</a>, et vous reconnaissez avoir plus de 18 ans. </p>
                <label for="">
                    <input type="checkbox" id="check1">
                    J'accepte
                </label>
                
            </div>

            <h3>Prix : 300000 FCFA</h3>
            <button class="btn-paiement">Payer</button>

        </form>
    </div>
   </section>
</body>
</html>
