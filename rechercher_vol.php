<?php 

$bdd = new PDO('mysql:host=localhost;dbname=agenceVoyage;charset=utf8;', 'root', 'root');

if(isset($_POST['rechercher'])) {
    $Apartir = $_POST['a-partir'];
    $Adestination = $_POST['a-destination'];
    $date = $_POST['dateInput'];

    $requete = "SELECT* FROM vols WHERE aeroportDepart = (SELECT iata_code FROM aeroports WHERE ville = $Apartir)
                                AND  aeroportArrivee = (SELECT iata_code FROM aeroports WHERE ville = $Adestination
                                AND dateVol = '$date'  ";

    $resultat = $bdd -> query($requete);

    

}


?>