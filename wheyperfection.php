<!DOCTYPE html>

<?php
    session_start();
?>

<html>
    <head>
         <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110058205-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-110058205-1');
        </script>
        
        <title>Fitness Lab</title>
        <meta name="title" content="Fitnesslab - Supplement ranking">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="blog.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    
    
<body>
    
<!------------------------------Navigatie------------------------------->
    
    <header>
        <img id="logo" src="fotos/logo.png" height="12%" width="12%">
        
        <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="ranking.php">Ranking</a></li>
            <li><a href="blogoverview.php">Reviews</a></li>
            <li><a href="aanmelden.php">Registreren</a></li>
            <?php
                        if (isset($_SESSION['id'])){
                            echo "<li><a id='inloggen' href='uitloggen.inc.php'>Uitloggen</a></li>"; 
                        }
                        else{
                            echo "<li><a id='inloggen' href='inloggen.php'>Inloggen</a></li>";
                        }
                    ?>
        </ul>
        </nav>
    
    
    </header>       

<!------------------------------Header------------------------------->
     <div id="ranking">
        <h2><b>Whey Perfection Review</b></h2>
  
    </div>

    
    <div class="lijnranking2">
    </div>
<!------------------------------Blogs------------------------------->
    
    <div class="container1">

        <p>Whey Perfection is een product dat ik een lange tijd heb gebruikt vanwege de lage prijs. Ik zou het omschrijven als een grote hoeveelheid eiwit voor een van de laagste prijzen die ik heb gezien. Als je niet te veel geld over hebt voor een supplement dan is dit een prima product. Als je echter serieus bent in het opbouwen van je spieren dan denk ik niet dat dit product de beste keus is omdat ik zelf erg twijfel aan de kwaliteit. Persoonlijk vind ik de kwaliteit van het product belangrijker dan de prijs.
        Het voordeel van Whey Perfection is dat er verschillende verpakkingen zijn, waarbij je met de grootste verpakking wel 3 tot 4 maanden vooruit kan. De voedingswaarden zien er als volgt uit:
        Een goede hoeveelheid eiwitten en weinig suikers, vetten en koolhydraten, op papier dus de ideale shake om vetvrije spiermassa op te bouwen.
</p>
    </div>
    
    <div class="tekstbeoordeling2">
            <p><b>Voedingswaarden</b></p>
      </div>
    <div class="w3-light-grey w3-tiny">
        <div class="w3-container w3-green" style="width:80%">8.0</div>
    </div>
    
    <div class="container1">
        <p>Verder is er een enorme hoeveelheid aan smaken  waar je uit kan kiezen bij dit product. Voor sommigen misschien een voordeel, maar ik vind het overbodig. Veel smaken die er tussen zitten zijn ook erg ver  gezocht zoals bijvoorbeeld ‘’Caramel cappucino’’. Zelf ben ik over geen van de smaken echt enthousiast. 
        De smaak en de kwaliteit van het poeder zijn ook de grootste nadelen van dit product en ook de belangrijkste redenen waarom ik het niet snel zou aanraden. Het poeder lost niet goed op met de drank waarmee je mixt en de smaak vind ik vaak erg slap, niet lijken op wat het zou moeten zijn en voor mij kost het bijna moeite om deze shake op te drinken.
        </p>
    </div>
     
    
    <div class="tekstbeoordeling2">
            <p><b>Smaak</b></p>
      </div>
    <div class="w3-light-grey w3-tiny">
        <div class="w3-container w3-green" style="width:50%">5.0</div>
    </div>
    
    <div class="container1">
        <p>Aan de andere kant kunnen je verwachtingen ook niet te hoog zijn van een ‘huismerk’ eiwitproduct voor een lage prijs. Wat mij betreft voldoet het product ook aan wat het uitstraalt: een matige kwaliteit en een grote hoeveelheid voor een goede prijs.</p>
    </div>
    
    <div class="tekstbeoordeling2">
            <p><b>Prijs/Kwaliteit</b></p>
      </div>
    <div class="w3-light-grey w3-tiny">
        <div class="w3-container w3-green" style="width:70%">7.0</div>
    </div>
    
    <div class="container1">
        <p>Houd de site in de gaten want binnenkort plaatsen wij de uitslag van de voedingswaarde test!<p>
    </div>
    
    
<!-------------------------------------Footer----------------------------------->
        
<footer>
            
            <div class="copyright">
                <p> &copy; 2017 Fitnesslab</p>
             </div>
            
            <div class="sm">
                <a href="https://www.facebook.com/Fitnesslab-184348892121760/" class="fa fa-facebook" target="_blank"></a>
                <a href="https://www.youtube.com/channel/UCGW2pSIAmXKTAXkmMFe-3gw?view_as=subscriber" class="fa fa-youtube" target="_blank"></a>
            </div>

 <div id="rowfooter" class="row">
    <div id="fopo1" class="col-md-4">
        <h5><b>MEER WETEN</b></h5> 
        <a href='testproces.php'>Test proces</a><br>
        <a href='rp.php'>Ranking proces</a><br>
        <a href='over.php'>Over</a>
    </div>
    
    <div id="fopo2" class="col-md-4">
        <h5><b>CONTACT</b></h5> 
        <a href='contact.php'>Gegevens</a>
        <center><img id="logofoot" src="fotos/logo.png" height="25" width="100"></center>
    </div>
    
    <div id="fopo3" class="col-md-4">
        <h5><b>RANKING</b></h5>
        <a href='ranking.php'>Huidig</a><br>
        <a href='verwacht.php'>Verwacht</a>
    </div>
    
    
    
 </div>
            
</footer>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="global.js"></script>    
    
</body>

</html>