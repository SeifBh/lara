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
  document.location.href="Tunisie/"+ s;

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

$("#divhover").html('<br><br><br><img top=520px align=center width=230px height=210px src=./images/logos/Tunisie/'+ s +'.png> </img></br>'); 

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

<div id="Image"><img id="im" class="esperance" src="./images/logos/tunisie/esperance.png"></img><br></div>
<div id="Image"><img id="im" class="club_africain" src="./images/logos/tunisie/club_africain.png" ></img><br></div>
<div id="Image"><img id="im" class="club_sfaxien" src="./images/logos/tunisie/club_sfaxien.png"></img><br></div>
<div id="Image"><img id="im" class="etoile_sportive_du_sahel" src="./images/logos/tunisie/etoile_sportive_du_sahel.png"></img><br></div>
<div id="Image"><img id="im" class="club_sportif_hamem_lif" src="./images/logos/tunisie/club_sportif_hamem_lif.png"></img><br></div>
<div id="Image"><img id="im" class="stade_tunisien" src="./images/logos/tunisie/stade_tunisien.png"></img><br></div>
<div id="Image"><img id="im" class="club_bizertien" src="./images/logos/tunisie/club_bizertien.png"></img><br></div>
<div id="Image"><img id="im" class="Espoir_Sportive_Djerba" src="./images/logos/tunisie/Espoir_Sportive_Djerba.png"></img><br></div>

<div id="Image"><img id="im" class="Esperance_Zarzis" src="./images/logos/tunisie/Esperance_Zarzis.png"></img><br></div>
<div id="Image"><img id="im" class="Gafsa" src="./images/logos/tunisie/Gafsa.png" ></img><br></div>
<div id="Image"><img id="im" class="Avenir_Sportif_gabes" src="./images/logos/tunisie/Avenir_Sportif_gabes.png"></img><br></div>
<div id="Image"><img id="im" class="ES_Metlaoui" src="./images/logos/tunisie/ES_Metlaoui.png"></img><br></div>
<div id="Image"><img id="im" class="Stade_gabsien" src="./images/logos/tunisie/Stade_gabsien.png"></img><br></div>
<div id="Image"><img id="im" class="monastir" src="./images/logos/tunisie/monastir.png"></img><br></div>
<div id="Image"><img id="im" class="Avenir_Marsa" src="./images/logos/tunisie/Avenir_Marsa.png"></img><br></div>

	     </div>

	</div>
</center>

	


	




</div>
	
</body>
</html>