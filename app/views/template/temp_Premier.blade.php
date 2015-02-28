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
  document.location.href="PremierLeague/"+ s;

});

//Methode Plus Courte 

$("#divchoix #im").mouseenter(function() {
 s = $(this).attr('class');
$("#divhover").html('<br><br><br><img top=320 align=center width=170 height=150 src=./images/logos/PremierLeague/'+s+'.png> </img></br> 14 Equipes'); 

});


/*

$( "#image #im" ).mouseenter(function() {
 s = $(this).attr('class');

$("#divhover").html('<br><br><br><img top=520px align=center width=230px height=210px src=./images/logos/PremierLeague/'+ s +'.png> </img></br>'); 

});*/

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

<div id="Image"><img id="im" class="Arsenal" src="./images/logos/PremierLeague/Arsenal.png"></img><br></div>
<div id="Image"><img id="im" class="Aston_villa" src="./images/logos/PremierLeague/Aston_villa.png" ></img><br></div>
<div id="Image"><img id="im" class="Burnley" src="./images/logos/PremierLeague/Burnley.png"></img><br></div>
<div id="Image"><img id="im" class="Chelsea" src="./images/logos/PremierLeague/Chelsea.png"></img><br></div>
<div id="Image"><img id="im" class="Crystal_Palace" src="./images/logos/PremierLeague/Crystal_Palace.png"></img><br></div>
<div id="Image"><img id="im" class="Everton" src="./images/logos/PremierLeague/Everton.png"></img><br></div>
<div id="Image"><img id="im" class="Hull_City" src="./images/logos/PremierLeague/Hull_City.png"></img><br></div>
<div id="Image"><img id="im" class="Leicester" src="./images/logos/PremierLeague/Leicester.png"></img><br></div>

<div id="Image"><img id="im" class="Liverpool" src="./images/logos/PremierLeague/Liverpool.png"></img><br></div>
<div id="Image"><img id="im" class="Manchester City" src="./images/logos/PremierLeague/Manchester City.png" ></img><br></div>
<div id="Image"><img id="im" class="Manchester_United" src="./images/logos/PremierLeague/Manchester_United.png"></img><br></div>
<div id="Image"><img id="im" class="newcastle_united" src="./images/logos/PremierLeague/newcastle_united.png"></img><br></div>
<div id="Image"><img id="im" class="QPR" src="./images/logos/PremierLeague/QPR.png"></img><br></div>
<div id="Image"><img id="im" class="Southampton" src="./images/logos/PremierLeague/Southampton.png"></img><br></div>
<div id="Image"><img id="im" class="Sunderland" src="./images/logos/PremierLeague/Sunderland.png"></img><br></div>
<div id="Image"><img id="im" class="Swansea_city" src="./images/logos/PremierLeague/Swansea_city.png"></img><br></div>
<div id="Image"><img id="im" class="Tottenham_Hotspur" src="./images/logos/PremierLeague/Tottenham_Hotspur.png"></img><br></div>
<div id="Image"><img id="im" class="west_bromwich_albion" src="./images/logos/PremierLeague/west_bromwich_albion.png"></img><br></div>
<div id="Image"><img id="im" class="West_Ham" src="./images/logos/PremierLeague/West_Ham.png"></img><br></div>
<div id="Image"><img id="im" class="stoke_city" src="./images/logos/PremierLeague/stoke_city.png"></img><br></div>



	     </div>

	</div>
</center>

	


	




</div>
	
</body>
</html>