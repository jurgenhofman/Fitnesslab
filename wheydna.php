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
        <h2><b>Whey DNA Review</b></h2>
  
    </div>

    
    <div class="lijnranking2">
    </div>
    
<!------------------------------Blogs------------------------------->
    
    <div class="container1">
    
        <p>Whey DNA is een van de nieuwe producten van fabrikant BSN. Deze shake behoort tot de DNA serie, waarin je verschillende producten met elkaar kan combineren. Verschillende producten zoals deze Whey, maar bijvoorbeeld ook bcaa en glutamine kan je zelf doseren en combineren met elkaar. Dit idee vind ik er leuk en handig, maar ik vind het jammer dat de lijn van producten beperkt is.:
        Whey DNA is een ‘Blend’ van Whey concentraat en Whey isolaat, wat voordelig is aangezien je lichaam maar een bepaalde hoeveelheid van een soort eiwit kan gebruiken. Er zitten 24 gram eiwit in per shake en ongeveer 55 shakes per pot (1.87kg) Er zit slechts 2 gram vet in en daarnaast krijg je ongeveer 130 Kcal per shake binnen en 4 gram koolhydraten waarvan 3 gram suiker. Voor mij is het een shake met de perfecte hoeveelheid eiwit en net voldoende suiker om lekker te smaken, maar niet slecht te zijn.
        Kortom, als je doel is om spiermassa te laten groeien zonder te veel vet op te bouwen is dit een zeer geschikt product. Het cijfer dat ik dit product geef op basis van de voedingswaarden is:
        </p>
    </div>
    
    <div class="tekstbeoordeling2">
            <p><b>Voedingswaarden</b></p>
      </div>
    <div class="w3-light-grey w3-tiny">
        <div class="w3-container w3-green" style="width:85%">8.5</div>
    </div>
    
    <div class="container1">
        <p>DDe smaak van Whey DNA is een van de grootse pluspunten. Eer zijn twee smaken waar je uit kan kiezen, vanille en chocola en allebei smaken ook daadwerkelijk naar vanille en naar chocola, iets wat naar mijn ervaring best bijzonder is. Bij Whey DNA is de smaak wat milder omdat er relatief weinig suiker in zit, maar de shake smaak niet minder lekker en zou wat mij betreft als milkshake geserveerd kunnen worden.</p>
    </div>
    
    <div class="tekstbeoordeling2">
            <p><b>Smaak</b></p>
      </div>
    <div class="w3-light-grey w3-tiny">
        <div class="w3-container w3-green" style="width:90%">9.0</div>
    </div>
    
    <div class="container1">
        <p>Voor een pot van 1.8 kg betaal je bij de grote shops als Body & Fit en XXL nutrition €34,50. BSN geeft zelf aan dat er ongeveer 55 shakes gemaakt kunnen worden van deze hoeveelheid. Ik vind de prijs aardig en is voor mij een goede indicatie van de prijs/kwaliteit verhouden. Voor mij ligt het net op de grens van wat ik over heb voor een supplement. 
        </p>
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