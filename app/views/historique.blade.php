<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./css/stylehistorique.css" media="screen" />

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

                                <table class="table table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th><center>id Match</center></th>
                                                        <th><center>Nom Equipe 1</th>
                                                        <th><center>Nom Equipe 2</th>
                                                        <th><center>p1</th>
                                                        <th><center>p2</th>
                                                        <th class="resultat"><center>r1</th>
                                                        <th class="resultat">r2</th>
                                                    </tr>
                                                </thead>
                                               <tbody>
            <!--
            
            DB::table('match')
            ->join('historique', 'match.idmatch', '=', 'historique.idmatch')
                ->get(array('idmatch', 'nomEquipe1', 'nomEquipe2'));
--> 
{{
            $idmatch=DB::table('historique')->where('iduser','=','2')->pluck('idmatch');
            $nomEquipe1=DB::table('match')->where('idmatch','=','idmatch')->pluck('nomEquipe1');
            $nomEquipe2=DB::table('match')->where('idmatch','=','idmatch')->pluck('nomEquipe2');
            $p1=DB::table('historique')->where('idmatch','=','idmatch')->pluck('p1');
            $p2=DB::table('historique')->where('idmatch','=','idmatch')->pluck('p2');
            $r1=DB::table('historique')->where('idmatch','=','idmatch')->pluck('r1');
            $r2=DB::table('historique')->where('idmatch','=','idmatch')->pluck('r2');



            }}





                                    
                                                    <tr>
                                                        <td><center>{{$idmatch}}</td>
                                                        <td><center>{{$nomEquipe1}}</td>
                                                        <td><center>{{$nomEquipe2}}</td>
                                                        <td><center>{{$p1}}</td>
                                                        <td><center>{{$p2}}</td>
                                                        <td><center>{{$r1}}</td>
                                                        <td><center>{{$r2}}</td>
                                                    </tr>
                                                    
                                                </tbody>
                                </table>

						    </div>



				     </div>
			</center>




</div>
	
</body>
</html>