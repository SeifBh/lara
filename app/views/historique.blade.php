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
							<div  id='divhover'>

                                <table class="table table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th><center>id Match</center></th>
                                                        <th><center>Nom Equipe 1</th>
                                                        <th><center>Nom Equipe 2</th>
                                                        <th><center>p1</th>
                                                        <th><center>p2</th>
                                                        <th>ssss</th>
                                                        <th class="resultat"><center>r1</th>
                                                        <th class="resultat">r2</th>
                                                    </tr>
                                                </thead>
                                                @foreach($histo as $info)
                                                   <tbody>
                                                        <td>{{ $info->match_id }}</td>
                                                        <td>{{ $info->match->nomEquipe1 }}</td>
                                                        <td>{{ $info->match->nomEquipe2 }}</td>
                                                        <td>{{ $info->p1 }}</td>
                                                        <td>{{ $info->p2 }}</td>
                                                        <td>$nomEquipe1</td>
                                                        <td>{{ $info->match->r1 }}</td>
                                                        <td>{{ $info->match->r2 }}</td>
                                                   </tbody>
                                                @endforeach

                                </table>
          
                            </div>

				     </div>
			</center>




</div>
	
</body>
</html>