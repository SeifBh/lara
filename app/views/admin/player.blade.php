
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>YouCoach</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="css/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="css/assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="css/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="css/assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   {{ HTML::script('js/player.js') }}

</head>
<body>


    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">YouCoach</a> 
            </div>
  <div class="dif" style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> {{$data["name"]}} <a href="/logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
								<li class="text-center">
                    <img src="" class="user-image img-responsive"/>
					</li>
		
				         
                    <li>
                        <a   href="Admin"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>

                    <li>
                        <a class="active-menu"  href="#"><i class="fa fa-sitemap fa-3x"></i> Gestion des joueurs<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="Player">Ajouter un Joueur</a>
                            </li>
                            <li>
                                <a href="EditPlayer">Modifier un joueur</a>
                            </li>
                            <li>
                                <a href="DeletePlayer">Supprimer un Joueur</a>

                            </li>
                        </ul>
                      </li> 

                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Gestion des Matchs<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="Match">Ajouter un Match</a>
                            </li>
                            <li>
                                <a href="EditMatch">Modifier un Match</a>
                            </li>
                            <li>
                                <a href="DeleteMatch">Supprimer un Match</a>

                            </li>
                        </ul>
                      </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Gestion des Equipes<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="Team">Ajouter une équipe</a>
                            </li>
                            <li>
                                <a href="EditTeam">Modifier une équipe</a>
                            </li>
                            <li>
                                <a href="DeleteTeam">Supprimer une équipe</a>

                            </li>
                        </ul>
                      </li>

                      <li  >
                        <a  href="Resultats"><i class="fa fa-table fa-3x"></i> Gestion des resultats</a>
                    </li>
  
                      <li  >
                        <a  href="Historique_Admin"><i class="fa fa-table fa-3x"></i> Historique Utilisateurs</a>
                    </li>

                        </ul>
                      </li> 
                             

                </ul>
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Formulaire Player
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Ajouter un Joueur</h3>
{{ Form::open(['action' => 'AddPlayerController@AddPlayer', 'method' => 'POST',  'id' => 'myForm']) }}

                                        <div class="form-group">
                                            <label>Nom</label>
                                            <input name="nom" class="form-control" placeholder="Nom Joueur" />
                                        </div>
                                        <div class="form-group">
                                            <label>Leagues</label>
                                            <select name = "league" id="league" class="form-control">
                                                 <option >Selectionnez league</option>

                                                 @foreach($league as $l)
                                                 <option value="{{$l->id}}">{{$l->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Equipe</label>
                                            <select id="team" name="team" class="form-control">
                                                        <option value=""></option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Position</label>
                                            <select name = "pos" id="pos" class="form-control">
                                                <option name = "type"value="GK1">GK1</option>
                                                <option name = "type"value="GK2">GK2</option>
                                                <option name = "type"value="GK3">GK3</option>
                                                <option name = "type"value="DR1">DR1</option>
                                                <option name = "type"value="DR2">DR2</option>
                                                <option name = "type"value="DR3">DR3</option>
                                                <option name = "type"value="DL1">DL1</option>
                                                <option name = "type"value="DL2">DL2</option>
                                                <option name = "type"value="DL3">DL3</option>
                                                <option name = "type"value="DC1">DC1</option>
                                                <option name = "type"value="DC2">DC2</option>
                                                <option name = "type"value="DC3">DC3</option>
                                                <option name = "type"value="DC4">DC4</option>
                                                <option name = "type"value="MCD1">MCD1</option>
                                                <option name = "type"value="MCD2">MCD2</option>
                                                <option name = "type"value="MCD3">MCD3</option>
                                                <option name = "type"value="MCG1">MCG1</option>
                                                <option name = "type"value="MCG2">MCG2</option>
                                                <option name = "type"value="MCG3">MCG3</option>
                                                <option name = "type"value="AC1">AC1</option>
                                                <option name = "type"value="AC2">AC2</option>
                                                <option name = "type"value="AC3">AC3</option>
                                                <option name = "type"value="AR1">AR1</option>
                                                <option name = "type"value="AR2">AR2</option>
                                                <option name = "type"value="AR3">AR3</option>
                                                <option name = "type"value="AL1">AL1</option>
                                                <option name = "type"value="AL2">AL2</option>
                                                <option name = "type"value="AL3">AL3</option>
                                                <option name = "type"value="FC1">FC1</option>
                                                <option name = "type"value="FC2">FC2</option>
                                                <option name = "type"value="FC3">FC3</option>


                                            </select>
                                        </div>                                     
                                   </br>
									 	<button  id="test" type="submit" class="btn btn-success">Submit Button</button>
                                        <button  type="reset" class="btn btn-primary">Reset Button</button>                                       
                                      <div id="result"></div> 
                                      </br>
                                      <div name="visit" id="visit" >{{ HTML::linkAction('AddPlayerController@visit', 'Visit website') }}</div>                                      

                                 </div>
                             </div>
                         </div>  
                         {{Form::close()}}         
         </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="css/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="css/assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="css/assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="css/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="css/assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="css/assets/js/custom.js"></script>

<script>
                $("#league").on('change',function(e){
                        console.log(e);
                        var cat_id = e.target.value;

                        //ajax

                        $.get('/ajax-subcat?cat_id='+cat_id,function(data){
                            //succes
                                $("#team").empty();
                                $.each(data, function(index,subcatObj){

                                    $("#team").append('<option value="'+subcatObj.name+'">'+subcatObj.name+'</option>')

                                });


                        });
 
                });


$("#myForm").submit(function(e) {
        e.preventDefault();
        var form_url = $( this ).attr('action');
    var form_data= $( this ).serialize();
    
        $.ajax({
            url: form_url,
            type: 'POST',
            data: form_data,
            dataType: 'json',
            success: function( result ){


                   $('#result').html( 'success1' );


            }
    });
});


</script>






</body>
</html>
