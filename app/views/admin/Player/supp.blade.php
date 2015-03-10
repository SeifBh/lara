
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
{{ Form::open(['action' => 'AddPlayerController@delete','method' => 'POST',  'id' => 'myForm']) }}


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
                                <a href="#">Modifier un Match</a>
                            </li>
                            <li>
                                <a href="#">Supprimer un Match</a>

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
                                <a href="#">Modifier une équipe</a>
                            </li>
                            <li>
                                <a href="#">Supprimer une équipe</a>

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
                                    <h3>Supprimer un Joueur</h3>


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
                                                <option >Selectionnez une équipe</option>

                                                        <option value=""></option>
                                            </select>
                                        </div> 

                                        <div class="form-group">
                                            <label>Liste Joueur</label>
                                            <select id="player" name="player" class="form-control">
                                                        <option value=""></option>
                                            </select>
                                        </div>
                                                        
                                   </br>
									 	<button  id="test" type="submit" class="btn btn-default">Submit Button</button>
                                        <button  type="reset" class="btn btn-primary">Reset Button</button>
                                {{Form::close()}}                                       
                                      <div id="result"></div> 
                                      </br>

                                 </div>
                             </div>
                         </div>  
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
    document.getElementById("team").disabled=true;
    document.getElementById("player").disabled=true;

                $("#league").on('change',function(e){
                        console.log(e);
                        var cat_id = e.target.value;
                        //ajax

                        $.get('/ajax-subcat?cat_id='+cat_id,function(data){
                            //succes
                                $("#team").empty();
                                $.each(data, function(index,subcatObj){
                                        document.getElementById("team").disabled=false;

                                    $("#team").append('<option value="'+subcatObj.team_id+'">'+subcatObj.name+'</option>')

                                });


                        });
 
                });




                $("#team").on('change',function(e){
                        console.log(e);
                        var cat_id = e.target.value;

                        //ajax

                        $.get('/ajax-subcat3?cat_id='+cat_id,function(data){
                            //success
                            $("#player").empty();
                                $.each(data, function(index,subcatObj){
                                        document.getElementById("player").disabled=false;

                                    $("#player").append('<option value="'+subcatObj.player_id+'">'+subcatObj.name+'</option>')
                              
                                                });


                        });
 
                });


                $("#player").on('change',function(e){
                        console.log(e);
                        var cat_id = e.target.value;
                        //ajax


                        $.get('/ajax-subcat4?cat_id='+cat_id,function(data){
                            //success
                                $.each(data, function(index,subcatObj){
                             $("input").remove();
                                    $(".row").append('<input name="player_id" id="player_id" type="hidden" value="'+subcatObj.player_id+'"></input></br>')

                                    $(".row").append('<input name="name" id="name" type="hidden" value="'+subcatObj.name+'"></input></br>')
                                    $(".row").append('<input name="position" id="position"  type="hidden" value="'+subcatObj.position+'"></input>')
                              
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


                   $('#result').append('<b>Ce Joueur est supprimé avec succes</b>');


            }
    });
});                           



</script>






</body>
</html>
