
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
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
                <a class="navbar-brand" href="index.html">YouCoach</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a   href="Admin"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a  href="Player"><i class="fa fa-desktop fa-3x"></i>Gestion des Joueurs</a>
                    </li>
                    <li>
                        <a  class="active-menu"  href="Match"><i class="fa fa-qrcode fa-3x"></i>Gestion des Matchs</a>
                    </li>
						   <li  >
                        <a   href="Team"><i class="fa fa-bar-chart-o fa-3x"></i>Gestion des Equipe</a>
                    </li>	
                      <li  >
                        <a  href="Historique_Admin"><i class="fa fa-table fa-3x"></i> Historique Users</a>
                    </li>

					                   
                  
                  <li  >
                        <a  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
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
                                    <h3>Ajouter un Match</h3>
                                    <form role="form">

                                        <div class="form-group">
                                            <label>Equipe Visite </label>
                                            <select class="form-control">
                                            	@foreach($listTeam as $team)
                                                <option>{{$team->NomComplet}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Equipe Visiteuse</label>
                                            <select class="form-control">
                                            	@foreach($listTeam as $team)
                                                <option>{{$team->NomComplet}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Etat</label>
                                            <input type="text" class="form-control" id="inputSuccess">
                                        </div>

                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Date</label>
                                            <input type="date" class="form-control" id="inputSuccess">
                                        </div>

                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Lieu</label>
                                            <input type="text" class="form-control" id="inputSuccess">
                                        </div>

                                                                            </br>
									 	<button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-primary">Reset Button</button>                                       
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
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
