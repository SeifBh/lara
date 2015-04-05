
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>YouCoach | Historique</title>
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
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Gestion des Matchs<span class="fa arrow"></span></a>
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
                        <a  href="#"><i class="fa fa-sitemap fa-3x"></i> Gestion des joueurs<span class="fa arrow"></span></a>
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
                        <a  class="active-menu"  href="Historique_Admin"><i class="fa fa-table fa-3x"></i> Historique Utilisateurs</a>
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
                           Historique Users
                        </div>
                        <div class="panel-body">
                            <input class="form-control" placeholder="Search : Nom Utilisateur"></br>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Match ID</th>

                                            <th>Liste des matchs</th>

                                            <th>ajoutée le</th>
                                        </tr>
                                    </thead>
                                                @foreach($h as $info)
                                                   <tbody>
                                                        <td>{{ $info->user_id }}</td>
                                                        <td>{{ $info->match_id }}</td>

                                                        <td>{{$nomEquipe1}} VS {{$nomEquipe2}}  
                                                            <input id="p1" type="text" value="{{$info->p1}}"size="1" ></input>
                                                            <input id="p2" type="text" value="{{$info->p2}}"size="1" ></input>
                                                        </td>
                                                
                                                        <td>{{ $info->created_at }}</td>                                                    



                                                   </tbody>
                                                @endforeach
                                </table>
                            </div>
                        </div>
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
   document.getElementById("p1").disabled=true;
   document.getElementById("p2").disabled=true;
   </script>

</body>
</html>
