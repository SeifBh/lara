<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

 </head>
<body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<div id='contenu'>
@yield('contenu')


<center>
		<div  id='divfull'>
		@yield('divfull')
		</br></br>
		<div  id='divhover'>
		           @yield('divhover')

	    </div></br>

         <div  id='divchoix'>
		@yield('divchoix')

<div id="Image"><img id="im" class="box1" src="./images/ligues/tunisie.png"></img><br></div>
<div id="Image"><img id="im" class="box2" src="./images/ligues/bbva.png" ></img><br></div>
<div id="Image"><img id="im" class="box3" src="./images/ligues/p_ligue.png"></img><br></div>
<div id="Image"><img id="im" class="box4" src="./images/ligues/italie.png"></img><br></div>
<div id="Image"><img id="im" class="box5" src="./images/ligues/ligue1.png"></img><br></div>
	     </div>

	</div>
</center>

	


	




</div>
	
</body>
</html>