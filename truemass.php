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
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
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
        <h2><b>True Mass Review</b></h2>
  
    </div>

    
    <div class="lijnranking2">
    </div>
<!------------------------------Blogs------------------------------->
    
    <div class="container1">

        <p>True Mass is, zoals de naam al omschrijft, een mass gainer. Met 700kcal per shake krijg je een enorme hoeveelheid aan energie binnen. True mass is net als alle weight gainers uitermate geschikt voor sporters die vooral aan willen komen, zowel in spiermassa als in vetpercentage. Maar ook mensen met een actieve/drukke levensstijl zouden dit product kunnen gebruiken als een soort maaltijdvervanger. Ik vind het zelf altijd dubieus om een maaltijd over te slaan en te vervangen voor een drank, maar als je kijkt naar voedingswaarden dan zou dit product je lichaam voorzien van voldoende goede voedingsstoffen, waaronder eiwitten, vitaminen en mineralen.  
        Een scoop van dit product wordt gemixt in 500 milliliter water. Dat zijn ongeveer twee glazen grote glazen en is veel meer dan een gemiddelde Shake. Een shake bevat 50 gram eiwit(waaronder whey isolaat en aminozuren). Toen ik dit product gebruikte merkte ik dat het echt vult, het is echt een maaltijd die je inneemt. Daarnaast merkte ik ook snel een toename in gewicht terwijl ik maar 1 shake per dag nam. Er wordt aangeraden om 2-4 per shakes dag te nemen, maar ik zou dit af laten hangen van je behoefte. Vooral voor mensen met een smalle lichaamsbouw is het aan te raden om meerdere shakes per dag te nemen.
        Wat betreft voedingswaarden krijgt deze shake een:
</p>
    </div>
    
    <div class="tekstbeoordeling2">
            <p><b>Voedingswaarden</b></p>
      </div>
    <div class="w3-light-grey w3-tiny">
        <div class="w3-container w3-green" style="width:70%">7.0</div>
    </div>
    
    <div class="container1">
        <p>Vanwege het hoge gehalte aan suikers kom je aan smaak bij deze shake niks te kort. Het proeft echt als een volle milkshake. Je kan kiezen uit vanille, chocola, aarbei en cookies&cream. Zelf heb ik vanille geproefd en dit smaakte erg lekker. De poeder lost goed op in zowel water als melk, waarbij ik zelf de voorkeur geef om dit product te mixen met water omdat het voor mijn smaak anders een te volle shake wordt.</p>
    </div> 
    
    <div class="tekstbeoordeling2">
            <p><b>Smaak</b></p>
      </div>
    <div class="w3-light-grey w3-tiny">
        <div class="w3-container w3-green" style="width:90%">9.0</div>
    </div>
    
    <div class="container1">
        <p>True Mass is alleen in een verpaking van 2.5kg verkrijgbaar en kost ongeveer €40 euro. Voor zo'n grote hoeveelheid vind ik dat best een vriendelijke prijs. Er zijn beter betaalbare producten, maar als de voedingswaarden van True Mass kloppen krijg je hier in ieder geval ook goede kwaliteit!</p>
    </div>
    
    <div class="tekstbeoordeling2">
            <p><b>Prijs/Kwaliteit</b></p>
      </div>
    <div class="w3-light-grey w3-tiny">
        <div class="w3-container w3-green" style="width:75%">7.5</div>
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