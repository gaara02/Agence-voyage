
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

    <?php 

$bdd = new PDO('mysql:host=localhost;dbname=agenceVoyage;charset=utf8;', 'root', 'root');

if(isset($_POST['rechercher'])) {
    $Apartir = $_POST['a-partir'];
    $Adestination = $_POST['a-destination'];
    $date = $_POST['dateInput'];

    
    $stmt = $bdd->prepare("SELECT * FROM vols 
                          WHERE aeroportDepart = (SELECT iata_code FROM aeroports WHERE ville = :Apartir)
                          AND aeroportArrivee = (SELECT iata_code FROM aeroports WHERE ville = :Adestination)
                          AND dateVol = :date");

    $stmt->bindParam(':Apartir', $Apartir);
    $stmt->bindParam(':Adestination', $Adestination);
    $stmt->bindParam(':date', $date);


    $stmt->execute();

    
    if ($stmt->rowCount() > 0) {
        
        echo '<section class="tickets">';
    
        
        //echo '<div class="content-to-loaded">';
    
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $heureDepart = $row['heureDepart'];

// Extraire les heures et les minutes
            $heures = substr($heureDepart, 0, 2);
            $minutes = substr($heureDepart, 2);

            // Vérifier la longueur de l'heure extraite
            if (strlen($heures) === 1) {
                // Si l'heure est de 3 caractères, extraire seulement le premier caractère
                $heures = substr($heureDepart, 0, 1);
                $minutes = substr($heureDepart, 1);
            }

            // Formater l'heure au format "hh:mm"
            $heureFormatee = $heures . ':' . $minutes;

           
            echo '<div class="ticket-container">';
            echo '<div class="col-item">';
            echo '<p>Compagnie</p>';
            echo '<h2 class="compagnie">' . $row['noCompagnie'] . '</h2>';
            echo '</div>';
            echo '<div class="col-item">';
            echo '<p>Heure Départ</p>';
            echo '<h2 class="heure-dep">' . $heureFormatee . '</h2>';
            echo '</div>';
            echo '<div class="col-item item-prix">';
            echo '<h2 class="prix">' . $row['prix'] . ' FCFA</h2>';
            echo '<button class="btn-offre" data-index="' . $row['index'] . '" onclick="openModal(' . $row['index'] . ')">Voir l\'offre</button>';
            echo '</div>';
            echo '</div>';
    
            echo '<div class="content-to-loaded">';
            echo '<p class="date-vol">' . $row['date'] . '</p>';
            echo '<div class="info-arp">';
            echo '<h2 class="aeroport-dep">' . $row['aeroportDep'] . '</h2>';
            echo '<h2 class="heure-modal">' . $row['heure'] . '</h2>';
            echo '<i class="fa fa-plane" aria-hidden="true"></i>';
            echo '<h2 class="heure-arrivee">' . $row['heureArrivee'] . '</h2>';
            echo '<h2 class="aeroport-arv">' . $row['aeroportArriv'] . '</h2>';
            echo '</div>';
            echo '<p class="compagnie-modal">' . $row['compagnie'] . '</p>';
            echo '<p class="prix-modal">' . $row['prix'] . ' FCFA</p>';
            echo '<p class="distance">' . $row['distance'] . '</p>';
            echo "<div class='boutons'>
                <a href='paiement.php'><button class='btn-reserver'>Reserver</button></a>
                <button class='btn-ajouter'>Ajouter au panier</button>
            </div>";
            echo '</div>';
        }
        
    
        
        echo '</section>';
        

        
       // echo '</div>';
    } else {
        
        echo '<p>Aucun vol trouvé pour les critères spécifiés.</p>';
    }
}
?>
           

    <script src="ticket.js"></script>
</body>
</html>
