<?php 
session_start();
if(!$_SESSION['password']){
    header('Location: login.php');
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        
       
        function fetchSuggestions(input, target) {
        $.ajax({
            url: 'suggestions.php',
            method: 'POST',
            data: { input: input, target: target },
            success: function(response) {
                $('#' + target + '-suggestions').html(response);
                
                $('#' + target + '-suggestions').parent().find('.suggestions-container').show();
            }
        });
    }

    $(document).ready(function() {
        function selectSuggestion(suggestionText, targetInput) {
            targetInput.val(suggestionText);
            targetInput.siblings('.suggestions-container').hide();
        }

        $('#a-partir').on('input', function() {
            var inputValue = $(this).val();
            fetchSuggestions(inputValue, 'a-partir');
        });

        $('#a-destination').on('input', function() {
            var inputValue = $(this).val();
            fetchSuggestions(inputValue, 'a-destination');
        });

        $('body').on('click', '.suggestions-container .suggestion', function() {
            var suggestionText = $(this).text();
            var targetInput = $(this).closest('.text-input').find('input');
            selectSuggestion(suggestionText, targetInput);
        });
    });




    </script>
    <title></title>
</head>
<body>
    <section class="header">
        <div class="slog"><h1>Parce que chaque voyage compte</h1></div>
        <nav>
            
            <a href="deconnexion.php" class="naviguer">Se deconnecter</a>
        </nav>
    </section>

    <section class="flight">
        <d iv class="small-container">
            <div class="menu">
        <div class="search">
            <div class="text-input">
                <i class="fa fa-mark fa-map-marker"></i>
                <p>À Partir De</p>
                <input type="text" name="a-partir" id="a-partir">
                <div class="suggestions-container" id="a-partir-suggestions"></div>
            </div>
            <div class="text-input">
                <i class="fa fa-mark fa-map-marker"></i>
                <p>A Destination De</p>
                <input type="text" name="a-destination" id="a-destination">
                <div id="a-destination-suggestions" class="suggestions-container" ></div>
            </div>
            <div class="text-input">
                
                <p>Date</p>
                <input type="date" >
            </div>
        
        </div>
        <div class="search-btn">
            <a href="billet.php"><button class="btn btn-first">Rechercher</button></a>
            </div>
        
    </div>
    </d>
    </section>

    <section class="destination">
        <h2>Nos Meilleurs destinations</h2>
        <div class="row">
            <div class="dest-col">
                
                <img src="img/istanbul_62b71c7d5e3489239753cded.jpg" alt="">
                <h3>Istanbul</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, nam? 
                    Lorem ipsum dolor sit amet </p>
            </div>
            <div class="dest-col">
                <img src="img/Joali-Maldives-Luxe-Wellness-Club10.jpg" alt="">
                <h3>Maldives</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, nam? 
                    Lorem ipsum dolor sit amet </p>
            </div>
            <div class="dest-col">
                
                <img src="img/PA1_japon.jpg" alt="">
                <h3>Japon</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, nam? 
                    Lorem ipsum dolor sit amet </p>
            </div>
        </div>
    </section>

    <section class="company">
        <h2>Ils nous font confiance</h2>
        <div class="row">
            <div class="comp-col">
                <img src="img/American-Airlines-Logo.jpg" alt="">
            </div>
            <div class="comp-col">
                <img src="img/SkyWest-Logo.jpg" alt="">
            </div>
            <div class="comp-col">
                <img src="img/Virgin-America-Logo.jpg" alt="">
            </div>
            <div class="comp-col">
                <img src="img/Atlantic_Southeast_Airlines-Logo.wine.png" alt="">
            </div>
        </div>
    </section>

    <section class="imag-dest">
        <h1>Decouvrez Toutes Les Destinations <br> Partout Dans Le Monde</h1>
        <a href="" class="inline-block">CHERCHER DES VOLS</a>
    </section>

    <section class="Footer">
        <h4>A propos de nous</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati,voluptatum necessitatibus Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br>Earum iste ipsum harum sed obcaecati.
            Ducimus similique facere repudiandae officia.</p>
        <div class="icon">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
    
        </div>    

    </section>
    
</body>
</html>