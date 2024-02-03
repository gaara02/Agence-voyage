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
    <section>
        <div class="container">
            <nav>
                <a href="login.html" class="identifier">S'identifier</a>
                <a href="" class="naviguer">Naviguer</a>
                <hr>
            </nav>
        </div>
    </section>

    <section>
        <div class="big-container">
            <div class="menu-1">
                <div class="search">
                    <div class="text-input">
                        <i class="fa fa-mark fa-map-marker"></i>
                        <p>À Partir De</p>
                        <input type="text">
                    </div>
                    <div class="text-input">
                        <i class="fa fa-mark fa-map-marker"></i>
                        <p>A Destination De</p>
                        <input type="text">
                    </div>
                    <div class="text-input">
                        <p>Date</p>
                        <input type="date">
                    </div>
                    <div class="btn2">
                        <button class="btn btn-first">Rechercher</button>
                    </div>
                </div>
                <div class="hr"><hr></div>
            </div>
        </div>
    </section>

    <section class="tickets"></section>

    <div class="modal" id="myModal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()"><i class="fa fa-times" aria-hidden="true"></i></span>
            <h3>Detail du vol</h3>
            <div class="content-to-loaded">
                <p class="date-vol"></p>
                <div class="info-arp">
                <h2 class="aeroport-dep"></h2>
                <h2 class="heure-modal"></h2>
                <i class="fa fa-plane" aria-hidden="true"></i>
                <h2 class="heure-arrivee"></h2>
                <h2 class="aeroport-arv"></h2>
                </div>
                <p class="compagnie-modal"></p>
                
                <p class="prix-modal"></p>
                
                <p class="distance"></p>
                
                
            </div>
            <div class="boutons">
                <a href="paiement.php"><button class="btn-reserver">Reserver</button></a>
                <button class="btn-ajouter">Ajouter au panier</button>
            </div>
        </div>
    </div>

    <script src="ticket.js"></script>
</body>
</html>
