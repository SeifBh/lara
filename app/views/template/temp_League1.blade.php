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
  document.location.href="League1/"+ s;

});

//Methode Plus Courte 

$("#divchoix #im").mouseenter(function() {
 s = $(this).attr('class');
$("#divhover").html('<br><br><br><img top=320 align=center width=170 height=150 src=./images/logos/League1/' + s +'.png> </img></br> 14 Equipes'); 

});




/*
$( ".esperance" ).mouseenter(function() {

$("#divhover").html('<br><br><br><img top=520px align=center width=230px height=210px src=./images/logos/esperance.png> </img></br>'); 

});
*/
$( ".club_africain" ).mouseenter(function() {

$("#divhover").html('<br><br><br><img top=520px align=center width=220px height=210px src=./images/logos/club_africain.png> </img></br>'); 

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

<div id="Image"><img id="im" class="Lens" src="./images/logos/League1/Lens.png"></img><br></div>
<div id="Image"><img id="im" class="Bordeaux" src="./images/logos/League1/Bordeaux.png" ></img><br></div>
<div id="Image"><img id="im" class="Caen" src="./images/logos/League1/Caen.png"></img><br></div>
<div id="Image"><img id="im" class="Evian" src="./images/logos/League1/Evian.png"></img><br></div>
<div id="Image"><img id="im" class="Guingamp" src="./images/logos/League1/Guingamp.png"></img><br></div>
<div id="Image"><img id="im" class="Bastia" src="./images/logos/League1/Bastia.png"></img><br></div>
<div id="Image"><img id="im" class="Lille" src="./images/logos/League1/Lille.png"></img><br></div>
<div id="Image"><img id="im" class="Lorient" src="./images/logos/League1/Lorient.png"></img><br></div>

<div id="Image"><img id="im" class="Metz" src="./images/logos/League1/Metz.png"></img><br></div>
<div id="Image"><img id="im" class="monaco" src="./images/logos/League1/monaco.png" ></img><br></div>
<div id="Image"><img id="im" class="Montpellier" src="./images/logos/League1/Montpellier.png"></img><br></div>
<div id="Image"><img id="im" class="Nantes" src="./images/logos/League1/Nantes.png"></img><br></div>
<div id="Image"><img id="im" class="Nice" src="./images/logos/League1/Nice.png"></img><br></div>
<div id="Image"><img id="im" class="Olympique_de _Marseille" src="./images/logos/League1/Olympique_de _Marseille.png"></img><br></div>
<div id="Image"><img id="im" class="Olympique_lyonnais" src="./images/logos/League1/Olympique_lyonnais.png"></img><br></div>
<div id="Image"><img id="im" class="Paris_Saint_Germain" src="./images/logos/League1/Paris_Saint_Germain.png"></img><br></div>
<div id="Image"><img id="im" class="Reims" src="./images/logos/League1/Reims.png"></img><br></div>
<div id="Image"><img id="im" class="Rennes" src="./images/logos/League1/Rennes.png"></img><br></div>
<div id="Image"><img id="im" class="Saint_Etienne" src="./images/logos/League1/Saint_Etienne.png"></img><br></div>
<div id="Image"><img id="im" class="Toulouse" src="./images/logos/League1/Toulouse.png"></img><br></div>



	     </div>

	</div>
</center>

	


	




</div>
	
</body>
</html>