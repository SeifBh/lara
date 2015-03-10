<?php
echo HTML::style('./css/stylehistorique.css');
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

	<link type="text/css" href="./css/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>

</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

 </head>
<body>
   <center> @include('partials.navigation')</center>

<div id='contenu'>


			<center>
					<div  id='divfull'>
							</br></br>
							<div  id='divhover' style="color:white">

                                    <h1><b>Votre score est :{{$score}}</b></h1>
                            
                            </div>

				     </div>
			</center>




</div>
	
</body>
</html>