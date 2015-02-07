<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./css/style0.css" media="screen" />
 
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="jquery.mCustomScrollbar.concat.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script type="text/javascript">


$(function(){
             
 
  
          
 //Methode Plus Courte
// Redirection Url Avec nom de l'equipe
 	  $("#divchoix #im").click(function() {
 s = $(this).attr('class');
  document.location.href="Italie/"+ s;

});

//Methode Plus Courte 
/*
$("#divchoix #im").mouseenter(function() {
 s = $(this).attr('class');
$("#divhover").html('<br><br><br><img top=320 align=center width=170 height=150 src=./images/logos/' + s +'.png> </img></br> 14 Equipes'); 

});

*/



$( "#image #im" ).mouseenter(function() {
 s = $(this).attr('class');

$("#divhover").html('<br><br><br><img top=520px align=center width=230px height=210px src=./images/logos/Italie/'+ s +'.png> </img></br>'); 

});

$( "#divchoix" ).mouseleave(function() {
 s = $(this).attr('class');

$("#divhover").html('<br><br><br><img top=520px align=center width=230px height=210px src=./images/ligues/Comingsoon.png> </img></br>'); 

});








});


        </script>
 </head>
<body>

<div id='contenu'>
@yield('contenu')
<div id="pos"><a href="/" > <img src="./images/prec.png" align='left' style='height:45px;width:45px;'></img> </a></div>


<center>
		<div  id='divfull'>
		@yield('divfull')

		</br></br>
		<div  id='divhover'>
		           @yield('divhover')

	    </div></br>

         <div  id='divchoix'>
		@yield('divchoix')

<div id="Image"><img id="im" class="Roma" src="./images/logos/Italie/Roma.png"></img><br></div>
<div id="Image"><img id="im" class="Juventus" src="./images/logos/Italie/Juventus.png" ></img><br></div>
<div id="Image"><img id="im" class="Lazio_Rome" src="./images/logos/Italie/Lazio_Rome.png"></img><br></div>
<div id="Image"><img id="im" class="Inter_Milan" src="./images/logos/Italie/Inter_Milan.png"></img><br></div>
<div id="Image"><img id="im" class="Hellas_Verone" src="./images/logos/Italie/Hellas_Verone.png"></img><br></div>

<div id="Image"><img id="im" class="Palermo" src="./images/logos/Italie/Palermo.png"></img><br></div>
<div id="Image"><img id="im" class="AC_Milan" src="./images/logos/Italie/AC_Milan.png"></img><br></div>
<div id="Image"><img id="im" class="Atalanta" src="./images/logos/Italie/Atalanta.png"></img><br></div>
<div id="Image"><img id="im" class="Cagliari" src="./images/logos/Italie/Cagliari.png"></img><br></div>
<div id="Image"><img id="im" class="Cesena" src="./images/logos/Italie/Cesena.png"></img><br></div>
<div id="Image"><img id="im" class="Chievo_Verona" src="./images/logos/Italie/Chievo_Verona.png" ></img><br></div>
<div id="Image"><img id="im" class="Empoli" src="./images/logos/Italie/Empoli.png"></img><br></div>
<div id="Image"><img id="im" class="Fiorentina" src="./images/logos/Italie/Fiorentina.png"></img><br></div>
<div id="Image"><img id="im" class="Genoa" src="./images/logos/Italie/Genoa.png"></img><br></div>
<div id="Image"><img id="im" class="Udinese" src="./images/logos/Italie/Udinese.png"></img><br></div>
<div id="Image"><img id="im" class="Torino" src="./images/logos/Italie/Torino.png"></img><br></div>


<div id="Image"><img id="im" class="Sassuolo" src="./images/logos/Italie/Sassuolo.png"></img><br></div>
<div id="Image"><img id="im" class="Sampdoria_Genes" src="./images/logos/Italie/Sampdoria_Genes.png"></img><br></div>
<div id="Image"><img id="im" class="Parme" src="./images/logos/Italie/Parme.png"></img><br></div>
<div id="Image"><img id="im" class="Napoli" src="./images/logos/Italie/Napoli.png"></img><br></div>


	     </div>

	</div>
</center>

	


	




</div>
	
</body>
</html>