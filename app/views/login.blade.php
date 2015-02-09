<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./css/stylelogin.css" media="screen" />
	<link type="text/css" href="./css/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>

</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

 </head>
<body>

<div id='contenu'>
@yield('contenu')


			<center>
					<div  id='divfull'>
					@yield('divfull')
							</br></br>
							<div  id='divhover'>
								    <div class="signin">




										<div class="col-md-12">
										            <a type="button"  class="btn btn-primary btn-block" href="{{url('login/fb')}}">Connect with Facebook</a>
										</div>
							        </div>

						    </div>



				     </div>
			</center>




</div>
	
</body>
</html>