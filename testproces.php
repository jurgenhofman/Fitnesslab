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
        
        <link rel="stylesheet" type="text/css" href="testproces.css">
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="lib/cntl.css">
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
 
    
<!------------------------------Main page------------------------------->   
    
    <div id="testuitleg">
        <h2><b>Het Testproces</b></h2>
     
    </div>
    
            <div class="lijnranking">
            </div>

<center>
<div class="cntl"> <span class="cntl-bar cntl-center"> <span class="cntl-bar-fill"></span> </span>
  <div class="cntl-states">
    <div class="cntl-state">
      <div class="cntl-content">
        <h4><b>Wij selecteren producten</b></h4>
        <p>Wij maken zelf de selectie van producten die wij laten testen. Wij kiezen de producten uit op basis van populariteit. Ook is het mogelijk om te stemmen op een product. Zodra er voldoende stemmen zijn uitgebracht zetten wij het proces in werking.</p>
      </div>
      <div class="cntl-icon cntl-center"></div>
    </div>
    <div class="cntl-state">
      <div class="cntl-content">
        <h4><b>Wij kopen de producten in</b></h4>
        <p>De producten die we laten testen kopen we zelf in bij de grootste doorverkopers, net als gewone consumenten.</p>
      </div>
      <div class="cntl-icon cntl-center"></div>
    </div>
    <div class="cntl-state">
      <div class="cntl-content">
        <h4><b>Wij sturen samples naar het Lab</b></h4>
        <p>Van de ingekochte producten nemen wij een sample van 500 gr. Deze sturen wij op naar het Laboratorium om een voedingswaarde test op uit te laten voeren. Vooralsnog voeren wij alleen een test uit op de zogenaamde 'Big 8'. </p>
      </div>
      <div class="cntl-icon cntl-center"></div>
    </div>
    <div class="cntl-state">
      <div class="cntl-content">
        <h4><b>Wij analyseren de resultaten</b></h4>
        <p>Nadat het Laboratorium de test heeft uitgevoerd ontvangen wij volledige rapporten en uitslagen. De rapporten kunnen worden ingezien. Aan de hand van de uitslagen maken wij een vergelijking met het productlabel en we waarderen het product.</p>
      </div>
      <div class="cntl-icon cntl-center"></div>
    </div>
    <div class="cntl-state">
      <div class="cntl-content">
        <h4><b>Wij maken een Ranking</b></h4>
        <p>Op basis van de uitslagen van de test ranken wij het product op basis van prijs -en kwaliteit vergeleken met andere producten.</p>
      </div>
      <div class="cntl-icon cntl-center"></div>
    </div>
  </div>
</div>
</center> 
    
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 
<script type="text/javascript" src="lib/jquery.cntl.js"></script> 
<script type="text/javascript">
	$(document).ready(function(e){
		$('.cntl').cntl({
			revealbefore: 300,
			anim_class: 'cntl-animate',
			onreveal: function(e){
				console.log(e);
			}
		});
	});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    
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
    
        
    </body>
    
    
</html>