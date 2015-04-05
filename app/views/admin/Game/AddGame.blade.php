
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>YouCoach | Matchs</title>
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
                    <img src="{{$data['photo']}}" class="user-image img-responsive"/>
                    </li>
        
                         
                    <li>
                        <a  href="#"><i class="fa fa-sitemap fa-3x"></i> Gestion des Leagues<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="AddLeague">Ajouter league</a>
                            </li>
                            <li>
                                <a href="EditLeague">Modifier league</a>
                            </li>
                            <li>
                                <a href="DeleteLeague">Supprimer league</a>

                            </li>
                        </ul>
                      </li> 
                      
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Gestion des Equipes<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="AddTeam">Ajouter une équipe</a>
                            </li>
                            <li>
                                <a href="EditTeam">Modifier une équipe</a>
                            </li>
                            <li>
                                <a href="DeleteTeam">Supprimer une équipe</a>

                            </li>
                        </ul>
                      </li>

                    <li>
                        <a class="active-menu" href="#"><i class="fa fa-sitemap fa-3x"></i> Gestion des Matchs<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="AddGame">Ajouter un Match</a>
                            </li>
                            <li>
                                <a href="EditGame">Modifier un Match</a>
                            </li>
                            <li>
                                <a href="DeleteGame">Supprimer un Match</a>

                            </li>
                        </ul>
                      </li>






                    <li>
                        <a   href="#"><i class="fa fa-sitemap fa-3x"></i> Gestion des joueurs<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="AddPlayer">Ajouter un Joueur</a>
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
                        <a  href="Add_Edit_Result"><i class="fa fa-table fa-3x"></i> Gestion des resultats</a>
                    </li>
  
                      <li  >
                        <a  href="Historique_Admin"><i class="fa fa-table fa-3x"></i> Historique Utilisateurs</a>
                    </li>

                        </ul>
                      </li> 
                             

                </ul>
            </div>
            
        </nav>  
{{ Form::open(['action' => 'GameController@AddGame_succes', 'method' => 'POST',  'id' => 'myForm']) }}


        <div id="page-wrapper" >

        	<div class="panel panel-default">
                        <div class="panel-heading">
                            Formulaire Match
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Ajouter un Match</h3>
                                    <form role="form">
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
                                            <label>Equipe Visite </label>
                                            <select id="s1" name="s1" class="form-control">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Equipe Visiteuse</label>
                                            <select id="s2" name="s2" class="form-control">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Etat</label>
                                            <input name="etat" class="form-control" placeholder="Etat" />
                                        </div>

                                        <div class="form-group">
                                            <label>date</label>
                                            <input name="date" type="datetime-local" class="form-control" placeholder="Date" required/>
                                        </div>

                                        <div class="form-group">
                                            <label>lieu</label>
                                            <input name="lieu" class="form-control" placeholder="Lieu" required/>
                                        </div>
                                        <div class="form-group">
                                            <input required type="hidden" name="id" id="id" value=""  class="form-control" placeholder="" />
                                        </div>
                                                                            </br>
									 	<button type="submit" class="btn btn-success">Submit Button</button>
                                        <button type="reset" class="btn btn-primary">Reset Button</button>                                       
                                         <div id="result"></div>                                       

                                    </form> 
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
                var result = document.getElementById("result");
                    result.innerHTML = "";

                $("#league").on('change',function(e){
                        console.log(e);
                        var league_id = e.target.value;

                        //ajax

                        $.get('/Ligue?league_id='+league_id,function(data){
                            //succes
                                $("#s1").empty();
                                $("#s2").empty();

                                $.each(data, function(index,subcatObj){

                                    $('input[name=id]').val(subcatObj.league_id);
                                 
                                    $("#s1").append('<option value="'+subcatObj.name+'">'+subcatObj.name+'</option>')

                                    $("#s2").append('<option value="'+subcatObj.name+'">'+subcatObj.name+'</option>')

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
                var result = document.getElementById("result");
                    result.innerHTML = "";

                   $('#result').append('<b>Ajout du match terminee avec succes</b>');


            }
    });
});                           

</script>   
</body>
</html>
