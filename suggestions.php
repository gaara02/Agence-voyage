<?php
$bdd = new PDO('mysql:host=localhost;dbname=agenceVoyage;charset=utf8;', 'root', 'root');

if (isset($_POST['input']) && isset($_POST['target'])) {
    $input = $_POST['input'];
    $target = $_POST['target'];

    $query = "SELECT DISTINCT ville FROM aeroports WHERE ville LIKE :input LIMIT 5";
    $stmt = $bdd->prepare($query);
    $stmt->bindValue(':input', "%$input%", PDO::PARAM_STR);
    $stmt->execute();

    $suggestions = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo '<ul class="suggestions-list">';
    foreach ($suggestions as $suggestion) {
        echo '<li class="suggestion">' . $suggestion['ville'] . '</li>';
    }
    echo '</ul>';
}
?>