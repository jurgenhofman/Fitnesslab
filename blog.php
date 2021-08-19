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
    </head>
    
    
<body>
    
<!------------------------------Navigatie------------------------------->
    
    <header>
        <img id="logo" src="fotos/logo%20wit.png" height="12%" width="12%">
        
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

<!------------------------------Blogs------------------------------->
    
    <div class="container">
        <h1>Eerste persoonlijke review</h1>
        <p>Dit is de eerste tekst voor de review. Dit is de eerste tekst voor de review. Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.</p>
    </div>
    
    <div class="tekstbeoordeling2">
            <p><b>Voedingswaarden</b></p>
      </div>
    <div class="w3-light-grey w3-tiny">
        <div class="w3-container w3-green" style="width:50%">50</div>
    </div>
    
    <div class="container">
        <p>Dit is de eerste tekst voor de review. Dit is de eerste tekst voor de review. Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.</p>
    </div>
     
        <div class="container">
        
        <p>Dit is de eerste tekst voor de review. Dit is de eerste tekst voor de review. Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.</p>
    </div>
    
    <div class="tekstbeoordeling2">
            <p><b>Smaak</b></p>
      </div>
    <div class="w3-light-grey w3-tiny">
        <div class="w3-container w3-green" style="width:50%">50</div>
    </div>
    
    <div class="container">
        <p>Dit is de eerste tekst voor de review. Dit is de eerste tekst voor de review. Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.</p>
    </div>
    
        <div class="container">
     
        <p>Dit is de eerste tekst voor de review. Dit is de eerste tekst voor de review. Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.</p>
    </div>
    
    <div class="tekstbeoordeling2">
            <p><b>Prijs/Kwaliteit</b></p>
      </div>
    <div class="w3-light-grey w3-tiny">
        <div class="w3-container w3-green" style="width:50%">50</div>
    </div>
    
    <div class="container">
        <p>Dit is de eerste tekst voor de review. Dit is de eerste tekst voor de review. Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.</p>
    </div>
    
        <div class="container">
        
        <p>Dit is de eerste tekst voor de review. Dit is de eerste tekst voor de review. Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.</p>
    </div>
    
    <div class="tekstbeoordeling2">
            <p><b>Eindcijfer</b></p>
      </div>
    <div class="w3-light-grey w3-tiny">
        <div class="w3-container w3-green" style="width:50%">50</div>
    </div>
    
    <div class="container">
        <p>Dit is de eerste tekst voor de review. Dit is de eerste tekst voor de review. Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.Dit is de eerste tekst voor de review.</p>
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

 <div id="rowfooter" class="row1">
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
        