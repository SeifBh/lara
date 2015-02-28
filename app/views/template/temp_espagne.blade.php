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
  document.location.href="BBva/"+ s;

});

//Methode Plus Courte 

$("#divchoix #im").mouseenter(function() {
 s = $(this).attr('class');
$("#divhover").html('<br><br><br><img top=320 align=center width=170 height=150 src=./images/logos/BBva/'+s+'.png> </img></br> 14 Equipes'); 

});



/*

$( "#image #im" ).mouseenter(function() {
 s = $(this).attr('class');

$("#divhover").html('<br><br><br><img top=520px align=center width=230px height=210px src=./images/logos/BBva/'+ s +'.png> </img></br>'); 

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

<div id="Image"><img id="im" class="Barcelone" src="./images/logos/BBva/Barcelone.png"></img><br></div>



<div id="Image"><img id="im" class="Real_Madrid" src="./images/logos/BBva/Real_Madrid.png" ></img><br></div>
<div id="Image"><img id="im" class="valencia" src="./images/logos/BBva/valencia.png"></img><br></div>
<div id="Image"><img id="im" class="Villarreal" src="./images/logos/BBva/Villarreal.png"></img><br></div>
<div id="Image"><img id="im" class="Atletico_Madrid" src="./images/logos/BBva/Atletico_Madrid.png"></img><br></div>

<div id="Image"><img id="im" class="Seville" src="./images/logos/BBva/Seville.png"></img><br></div>
<div id="Image"><img id="im" class="Real_Sociedad" src="./images/logos/BBva/Real_Sociedad.png"></img><br></div>
<div id="Image"><img id="im" class="Rayo_Vallecano" src="./images/logos/BBva/Rayo_Vallecano.png"></img><br></div>
<div id="Image"><img id="im" class="Malaga" src="./images/logos/BBva/Malaga.png"></img><br></div>
<div id="Image"><img id="im" class="Levante" src="./images/logos/BBva/Levante.png"></img><br></div>
<div id="Image"><img id="im" class="Granada" src="./images/logos/BBva/Granada.png" ></img><br></div>
<div id="Image"><img id="im" class="Getafe" src="./images/logos/BBva/Getafe.png"></img><br></div>
<div id="Image"><img id="im" class="Espanyol_Barcelone" src="./images/logos/BBva/Espanyol_Barcelone.png"></img><br></div>
<div id="Image"><img id="im" class="Elche" src="./images/logos/BBva/Elche.png"></img><br></div>
<div id="Image"><img id="im" class="Eibar" src="./images/logos/BBva/Eibar.png"></img><br></div>
<div id="Image"><img id="im" class="Deportivo_ La_Corogne" src="./images/logos/BBva/Deportivo_ La_Corogne.png"></img><br></div>
<div id="Image"><img id="im" class="cordoba" src="./images/logos/BBva/cordoba.png"></img><br></div>
<div id="Image"><img id="im" class="Celta_Vigo" src="./images/logos/BBva/Celta_Vigo.png"></img><br></div>
<div id="Image"><img id="im" class="Athletic_Bilbao" src="./images/logos/BBva/Athletic_Bilbao.png"></img><br></div>
<div id="Image"><img id="im" class="Almeria" src="./images/logos/BBva/Almeria.png"></img><br></div>


	     </div>

	</div>
</center>

	


	




</div>
	
</body>
</html>