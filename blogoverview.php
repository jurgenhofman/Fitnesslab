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
        <link rel="stylesheet" type="text/css" href="blogoverview.css">
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

<!------------------------------HEader---------------------------->

<a href="#" class="backtotop"><img src="fotos/arrow%20up.png" height="50" width="50"></a>  

    <div id="ranking">
        <h2><b>Reviews</b></h2>
        <h4>Onderstaande reviews zijn persoonlijke reviews.</h4>
    </div>

    
    <div class="lijnranking2">
    </div>
    
    
<!------------------------------Intro stuk---------------------------->
    <div class="blogintro">
        <p>Ik heb mijn hele leven vele verschillende sporten beoefend. Sinds mijn 16e  wou ik steeds minder vast zitten aan vaste trainingstijden van sportverenigingen. Om toch fit te blijven ben ik begonnen met fitnessen. Deze nieuwe passie nam ik steeds serieuzer en ik ben me zelf gaan verdiepen in verschillende oefeningen, technieken, voeding en het gebruik en uiteindelijk ook het effect van voedingssupplementen. Al vele jaren gebruik ik eiwitshakes die mijn dagelijkse voeding aanvullen om te voorzien in mijn behoefte aan eiwitten.
Tijdens mijn zoektocht naar het juiste product viel het mij op dat er een aantal grote sites zijn die producten aanbieden. Mijn frustratie was echter dat er zo veel aanbod aan producten is en dat alles draait om marketing. Nergens kreeg ik het gevoel dat iemand mij kon adviseren welk product nou goed was en waarom. Alle producten claimen de beste te zijn en de voedingswaarde labels zien er altijd veelbelovend uit met de belofte dat het product alle benodigde ingrediënten bevat. 
Ik ging mijzelf afvragen: is dit wel echt zo? Wat zit er nou echt in producten en welk product is, gebaseerd op mijn persoonlijke smaak en objectief onderzoek nou het beste product voor mij?
Met dit in gedachten ben ik begonnen met het ontwikkelen van deze site. Het doel van de site is om te bepalen welk voedingssupplement het beste is voor jou, gebaseerd op een combinatie van objectieve reviews en cijfers op basis van een voedingswaardeonderzoek en subjectieve reviews van gebruikers. 
Vanwege mijn eigen ervaring me veel verschillende supplementen schrijf ik zelf persoonlijk reviews in deze rubriek. Ik heb als doel gesteld om deze reviews te blijven schrijven door regelmatig zelf een nieuw product uit te proberen. Daarnaast is het mogelijk om met je account zelf een review te schrijven over een product. Hoe meer reviews, hoe meer producten er getest kunnen worden!
</p>
</div>

<div class="lijnranking"></div>

   
<!------------------------------Blogposts------------------------------->

<!------------------------------1------------------------------->
<div class="blogpost">
    <div class="row">
        <div id="tekst" class="col-md-4"><h2><b>Gold Standard 100% Whey review</b></h2>
            <p>Score:</p>
                <div class="w3-light-grey w3-tiny">
                    <div class="w3-container w3-green" style="width:73%">7.3</div>
                </div><br>
            <p><b>Pluspunten:</b> Variatie in smaak</p>
            <p><b>Minpunten:</b> Prijs</p>
                    <p id="volledig"><a href="ongs.php">Bekijk de volledige review...</a></p> 
        </div>
    
        <div id="afb" class="col-md-4"><img src="fotos/optimumnutrition.jpg" height="170"></div>
    
    </div>
</div>
    
<div class="lijn">
</div>
    
<!------------------------------1------------------------------->
<div class="blogpost">
    <div class="row">
        <div id="tekst" class="col-md-4"><h2><b>Clean Protein Bar review</b></h2>
            <p>Score:</p>
                <div class="w3-light-grey w3-tiny">
                    <div class="w3-container w3-green" style="width:60%">6.0</div>
                </div><br>
            <p><b>Pluspunten:</b> Prijs/Kwaliteit, variatie in smaak</p>
            <p><b>Minpunten:</b> Smaak</p>
                    <p id="volledig"><a href="cpb.php">Bekijk de volledige review...</a></p> 
        </div>
    
        <div id="afb" class="col-md-4"><img src="fotos/clean-protein-bar-display.jpg" height="170"></div>
    
    </div>
</div>
    
<div class="lijn">
</div>
    
 <!------------------------------1------------------------------->
<div class="blogpost">
    <div class="row">
        <div id="tekst" class="col-md-4"><h2><b>Power bar Protein Plus review</b></h2>
            <p>Score:</p>
                <div class="w3-light-grey w3-tiny">
                    <div class="w3-container w3-green" style="width:73%">7.3</div>
                </div><br>
            <p><b>Pluspunten:</b> Smaak, Eiwitgehalte</p>
            <p><b>Minpunten:</b> Prijs</p>
                    <p id="volledig"><a href="powerbar.php">Bekijk de volledige review...</a></p> 
        </div>
    
        <div id="afb" class="col-md-4"><img src="fotos/041325_A.png" height="170"></div>
    
    </div>
</div>
    
<div class="lijn">
</div>   
    
<!------------------------------1------------------------------->
<div class="blogpost">
    <div class="row">
        <div id="tekst" class="col-md-4"><h2><b>Whey DNA review</b></h2>
            <p>Score:</p>
                <div class="w3-light-grey w3-tiny">
                    <div class="w3-container w3-green" style="width:81%">8.1</div>
                </div><br>
            <p><b>Pluspunten:</b> Smaak, Prijs/Kwaleit</p>
            <p><b>Minpunten:</b> Weinig variatie in smaak en hoeveelheid</p>
                    <p id="volledig"><a href="wheydna.php">Bekijk de volledige review...</a></p> 
        </div>
    
        <div id="afb" class="col-md-4"><img src="fotos/bsn_whey_dna.jpg" height="170"></div>
    
    </div>
</div>
    
<div class="lijn">
</div>
    
 <!------------------------------2------------------------------->
 
    <div class="blogpost">
    <div class="row">
        <div id="tekst" class="col-md-4"><h2><b>Whey Perfection review</b></h2>
            <p>Score:</p>
                <div class="w3-light-grey w3-tiny">
                    <div class="w3-container w3-green" style="width:66%">6.6</div>
                </div><br>
            <p><b>Pluspunten:</b> Prijs</p>
            <p><b>Minpunten:</b> KWaliteit</p>
                    <p id="volledig"><a href="wheyperfection.php">Bekijk de volledige review...</a></p> 
        </div>
    
        <div id="afb" class="col-md-4"><img src="fotos/whey_perfection-vanilla-2270_1_114.jpg" height="170"></div>
    
    </div>
</div>
    
<div class="lijn">
</div>
    
 <!------------------------------3------------------------------->
 
    <div class="blogpost">
    <div class="row">
        <div id="tekst" class="col-md-4"><h2><b>True Mass review</b></h2>
            <p>Score:</p>
                <div class="w3-light-grey w3-tiny">
                    <div class="w3-container w3-green" style="width:78%">7.8</div>
                </div><br>
            <p><b>Pluspunten:</b> Voedingswaarden, smaak</p>
            <p><b>Minpunten:</b> Prijs</p>
                    <p id="volledig"><a href="truemass.php">Bekijk de volledige review...</a></p> 
        </div>
    
        <div id="afb" class="col-md-4"><img src="fotos/bsn_true-mass-16-servings-eu_1-1.png" height="170"></div>
    
    </div>
</div>
    
<div class="lijn">
</div>  
    
 <!------------------------------4------------------------------->
 
    <div class="blogpost">
    <div class="row">
        <div id="tekst" class="col-md-4"><h2><b>Mammoth 2500 review</b></h2>
            <p>Score:</p>
                <div class="w3-light-grey w3-tiny">
                    <div class="w3-container w3-green" style="width:75%">7.5</div>
                </div><br>
            <p><b>Pluspunten:</b> Prijs/hoeveelheid</p>
            <p><b>Minpunten:</b> Smaak</p>
                    <p id="volledig"><a href="mammoth.php">Bekijk de volledige review...</a></p> 
        </div>
    
        <div id="afb" class="col-md-4"><img src="fotos/mammoth2500.jpg" height="170"></div>
    
    </div>
</div>
    
<div class="lijn">
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