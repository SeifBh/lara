
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
font-size: 16px;">  <a href="/logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                                <a href="#">Modifier un joueur</a>
                            </li>
                            <li>
                                <a href="#">Supprimer un Joueur</a>

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
        {{ Form::open(['action' => 'AdminController@AddResultat', 'method' => 'POST',  'id' => 'myForm']) }}

        <div id="page-wrapper" >

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Formulaire League
                        </div>
                        <div class="panel-body">
                            


                                 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                 <div class="form-group">
                                            <label>Leagues</label>
                                            <select name = "league" id="league" class="form-control">
                                                 <option >Selectionnez league</option>

                                                 @foreach($league as $l)
                                                 <option value="{{$l->id}}">{{$l->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                <table class="table table-striped table-bordered table-hover" id="table" name="table">
                                  <thead>
                                        <tr>
                                            <th>Match_id</th>
                                            <th>nom Equipe1</th>
                                            <th>nom Equipe2</th>
                                            <th>score 1 </th>
                                            <th>score 2</th>
                                        </tr>

                                    </thead>
                                    <tbody id="tbody">
                                    </tbody>
                                                   
                                </table>
                                         </br>
                                        <button  id="test" type="submit" class="btn btn-default">Submit Button</button>
                                        <button  type="reset" class="btn btn-primary">Reset Button</button>                                       

                                      <div id="result"></div>  

                                      {{Form::close()}}
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
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
                $("#league").on('change',function(e){

                        console.log(e);
                        var cat_id = e.target.value;

                        //ajax

                        $.get('/ajax-subcat2?cat_id='+cat_id,function(data){
                            //succes
                                $.each(data, function(index,subcatObj){
                                    
                                    $('#table').append('<tbody></tbody>');

                                    $("#table").append('<tbody id="tbodyid"><tr>');
                                    $("#table").append('<td value="'+subcatObj.match_id+'">'+subcatObj.match_id+'</td>')
                                    $("#table").append('<td value="'+subcatObj.nomEquipe1+'">'+subcatObj.nomEquipe1+'</td>')
                                    $("#table").append('<td value="'+subcatObj.nomEquipe2+'">'+subcatObj.nomEquipe2+'</td>')
                                    $("#table").append('<td><input value="'+subcatObj.r1+'" size="0.5" id="'+subcatObj.nomEquipe1+'" name="r1" type="text" class="form-control" placeholder="resultat1" /></td>')
                                    $("#table").append('<td><input value="'+subcatObj.r2+'" size="0,2" id="'+subcatObj.nomEquipe2+'" name="r2" type="text" class="form-control" placeholder="resultat2" /></td>')
                                    $("#table").append('</tr></tbody>');

                                });

                        });
                });

</script>

</body>
</html>
