

{{HTML::style('./css/stylesequipes.css');}}
{{HTML::style('./css/bootstrap/dist/css/bootstrap-min.css');}} 


<html lang="fr">
  <head>
      <meta charset="UTF-8">

      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="language" content="en" />
      <meta name="description" content="" />
      <meta name="keywords" content="" />     
    <!--Js file-->
      <script src="http://heartcode-canvasloader.googlecode.com/files/heartcode-canvasloader-min-0.9.1.js"></script>
      <script src="https://raw.githubusercontent.com/heartcode/CanvasLoader/master/js/heartcode-canvasloader.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <!-- jQuery Touch Punch - Enable Touch Drag and Drop -->
      <script src="../core/vendor/jquery.touch-punch.min.js"></script>
        <!-- jQuery.Shapeshift -->
      <script src="../core/jquery.shapeshift.js"></script>
      <script src="../core/CoashManager.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
      <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
      <script type="text/javascript" src="jquery-1.4.2.min.js"></script>
      <script type="text/javascript" src="jquery-ui-1.8.custom.min.js"></script>
      <script src="//code.jquery.com/jquery-1.10.2.js"></script>
      <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>      
    <!--CSS file-->
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">



  </head>
  <body>


      <div id="contenue"></div>
      <div id="pos"><a href="/Tunisie" > <img src="../images/prec.png" align="left" style="height:45px;width:45px;"></img></a> </div>


      <div id="mil">
               
              <div id="stade">


                      <div id="sor">

                            <div id="Joueur1" class="ui-draggable" style="position: relative; left: 210px; top: 500px;">
                              <img class="j1" id="Joueur" src="../images/' . $n . '.png">
                                <div id="ok1" class="ui-sortable">


                                 {{$user = DB::table($n)->where('poste',  '=', 'GK1')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}

                                                 <div  id="test" class="sel" style="opacity:1;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user}}
                                                              </b>
                                                            </font>
                                                  </div>

                                                }




                                 {{$user = DB::table($n)->where('poste',  '=', 'GK2')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}

                                                 <div  id="test" class="sel" style="opacity:0.4;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user }}
                                                              </b>
                                                            </font>
                                                  </div>
                                                }

                                 {{$user = DB::table($n)->where('poste',  '=', 'GK3')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}


                                                 <div  id="test" class="sel" style="opacity:0.4;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user}}
                                                              </b>
                                                            </font>
                                                  </div>
                                                }





                                 </div>
                              </div>



                            <div id="Joueur2" class="ui-draggable"  style="position: relative; left: 370px; top: 275px;">
                              <img class="j2" id="Joueur" src="../images/' . $n . '.png">
                                <div id="ok2" class="ui-sortable">
                                 {{$user = DB::table($n)->where('poste',  '=', 'DR1')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}

                                                 <div  id="test" class="sel" style="opacity:1;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user ;}}
                                                              </b>
                                                            </font>
                                                  </div>

                                                 }




                                 {{$user = DB::table($n)->where('poste',  '=', 'DR2')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}

                                                 <div  id="test" class="sel" style="opacity:0.4;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user ;}}
                                                              </b>
                                                            </font>
                                                  </div>
                                                 }

                                 {{$user = DB::table($n)->where('poste',  '=', 'DR3')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}


                                                 <div  id="test" class="sel" style="opacity:0.4;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user ;}}
                                                              </b>
                                                            </font>
                                                  </div>
                                                 }





                                 </div>
                              </div>









                          <div id="Joueur3" class="ui-draggable"  style="position: relative; left: 50px; top: 198px;">
                              <img class="j3" id="Joueur" src="../images/' . $n . '.png">
                                <div id="ok3" class="ui-sortable">




                                 {{$user = DB::table($n)->where('poste',  '=', 'DL1')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}

                                                 <div  id="test" class="sel" style="opacity:1;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user ;}}
                                                              </b>
                                                            </font>
                                                  </div>

                                                 }




                                 {{$user = DB::table($n)->where('poste',  '=', 'DL2')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}

                                                 <div  id="test" class="sel" style="opacity:0.4;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user ;}}
                                                              </b>
                                                            </font>
                                                  </div>
                                                 }

                                 {{$user = DB::table($n)->where('poste',  '=', 'DL3')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}


                                                 <div  id="test" class="sel" style="opacity:0.4;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user ;}}
                                                              </b>
                                                            </font>
                                                  </div>
                                                 }





                                 </div>
                              </div>
          
                          <div id="Joueur4" class="ui-draggable"   style="position: relative; left: 150px; top: 155px;">
                              <img class="j4" id="Joueur" src="../images/' . $n . '.png">
                                <div id="ok4" class="ui-sortable">';

                               


                                 {{$user = DB::table($n)->where('poste',  '=', 'DC1')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}

                                                 <div  id="test" class="sel" style="opacity:1;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user ;}}
                                                              </b>
                                                            </font>
                                                  </div>

                                                 }




                                 {{$user = DB::table($n)->where('poste',  '=', 'DC2')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}

                                                 <div  id="test" class="sel" style="opacity:0.4;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user ;}}
                                                              </b>
                                                            </font>
                                                  </div>
                                                 }

                                 {{$user = DB::table($n)->where('poste',  '=', 'DC3')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}


                                                 <div  id="test" class="sel" style="opacity:0.4;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user ;}}
                                                              </b>
                                                            </font>
                                                  </div>
                                                 }





                                 </div>
                              </div>



                          <div id="Joueur5" class="ui-draggable"  style="position: relative; left: 260px; top: 80px;">
                              <img class="j5" id="Joueur" src="../images/' . $n . '.png">
                                <div id="ok5" class="ui-sortable">




                                 {{$user = DB::table($n)->where('poste',  '=', 'DC3')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}

                                                 <div  id="test" class="sel" style="opacity:1;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user ;}}
                                                              </b>
                                                            </font>
                                                  </div>

                                                 }




                                 {{$user = DB::table($n)->where('poste',  '=', 'DC4')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}

                                                 <div  id="test" class="sel" style="opacity:0.4;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user ;}}
                                                              </b>
                                                            </font>
                                                  </div>
                                                 }

                                 {{$user = DB::table($n)->where('poste',  '=', 'DC5')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}


                                                 <div  id="test" class="sel" style="opacity:0.4;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user ;}}
                                                              </b>
                                                            </font>
                                                  </div>
                                                 }





                                 </div>
                              </div>









                        <div id="Joueur6" class="ui-draggable"  style="position: relative; left: 260px; top: -130px;">
                              <img class="j6" id="Joueur" src="../images/' . $n . '.png">
                                <div id="ok6" class="ui-sortable">




                                 {{$user = DB::table($n)->where('poste',  '=', 'MC1')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}

                                                 <div  id="test" class="sel" style="opacity:1;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user ;}}
                                                              </b>
                                                            </font>
                                                  </div>

                                                 }




                                 {{$user = DB::table($n)->where('poste',  '=', 'MC2')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}

                                                 <div  id="test" class="sel" style="opacity:0.4;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user ;}}
                                                              </b>
                                                            </font>
                                                  </div>
                                                 }

                                 {{$user = DB::table($n)->where('poste',  '=', 'MC3')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}


                                                 <div  id="test" class="sel" style="opacity:0.4;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user ;}}
                                                              </b>
                                                            </font>
                                                  </div>
                                                 }





                                 </div>
                              </div>







                          <div id="Joueur7" class="ui-draggable"  style="position: relative; left: 150px; top: -205px;">
                              <img class="j7" id="Joueur" src="../images/' . $n . '.png">
                                <div id="ok7" class="ui-sortable">




                                 {{$user = DB::table($n)->where('poste',  '=', 'MCX3')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}

                                                 <div  id="test" class="sel" style="opacity:1;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user ;}}
                                                              </b>
                                                            </font>
                                                  </div>

                                                 }




                                 {{$user = DB::table($n)->where('poste',  '=', 'MCX4')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}

                                                 <div  id="test" class="sel" style="opacity:0.4;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user ;}}
                                                              </b>
                                                            </font>
                                                  </div>
                                                 }

                                 {{$user = DB::table($n)->where('poste',  '=', 'MCX5')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}


                                                 <div  id="test" class="sel" style="opacity:0.4;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user ;}}
                                                              </b>
                                                            </font>
                                                  </div>
                                                 }





                                 </div>
                              </div>










                <div id="Joueur8" class="ui-draggable" style="position: relative; left: 50px; top: -395px;">
                              <img class="j8" id="Joueur" src="../images/' . $n . '.png">
                                <div id="ok8" class="ui-sortable">

        


                                 {{$user = DB::table($n)->where('poste',  '=', 'AC1')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}

                                                 <div  id="test" class="sel" style="opacity:1;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user ;}}
                                                              </b>
                                                            </font>
                                                  </div>

                                                 }




                                 {{$user = DB::table($n)->where('poste',  '=', 'AC2')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}

                                                 <div  id="test" class="sel" style="opacity:0.4;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user ;}}
                                                              </b>
                                                            </font>
                                                  </div>
                                                 }

                                 {{$user = DB::table($n)->where('poste',  '=', 'AC3')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}


                                                 <div  id="test" class="sel" style="opacity:0.4;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user ;}}
                                                              </b>
                                                            </font>
                                                  </div>
                                                 }





                                 </div>
                              </div>





                            <div id="Joueur9" class="ui-draggable" style="position: relative; left: 370px; top: -470px;">
                              <img class="j9" id="Joueur" src="../images/' . $n . '.png">
                                <div id="ok9" class="ui-sortable">




                                 {{$user = DB::table($n)->where('poste',  '=', 'AR1')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}

                                                 <div  id="test" class="sel" style="opacity:1;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user ;}}
                                                              </b>
                                                            </font>
                                                  </div>

                                                 }




                                 {{$user = DB::table($n)->where('poste',  '=', 'AR2')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}

                                                 <div  id="test" class="sel" style="opacity:0.4;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user ;}}
                                                              </b>
                                                            </font>
                                                  </div>
                                                 }

                                 {{$user = DB::table($n)->where('poste',  '=', 'AR3')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}


                                                 <div  id="test" class="sel" style="opacity:0.4;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user ;}}
                                                              </b>
                                                            </font>
                                                  </div>
                                                 }





                                 </div>
                              </div>



                      <div id="Joueur10" class="ui-draggable"style="position: relative; left: 150px; top: -620px;">
                              <img class="j10" id="Joueur" src="../images/' . $n . '.png">
                                <div id="ok10" class="ui-sortable">




                                 {{$user = DB::table($n)->where('poste',  '=', 'AL1')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}

                                                 <div  id="test" class="sel" style="opacity:1;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user ;}}
                                                              </b>
                                                            </font>
                                                  </div>

                                                 }




                                 {{$user = DB::table($n)->where('poste',  '=', 'AL2')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}

                                                 <div  id="test" class="sel" style="opacity:0.4;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user ;}}
                                                              </b>
                                                            </font>
                                                  </div>
                                                 }

                                 {{$user = DB::table($n)->where('poste',  '=', 'AL3')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}


                                                 <div  id="test" class="sel" style="opacity:0.4;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user ;}}
                                                              </b>
                                                            </font>
                                                  </div>
                                                 }





                                 </div>
                              </div>









                    <div id="Joueur11" class="ui-draggable" style="position: relative; left: 260px; top: -695px;">
                              <img class="j11" id="Joueur" src="../images/' . $n . '.png">
                                <div id="ok11" class="ui-sortable">




                                 {{$user = DB::table($n)->where('poste',  '=', 'FC1')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}

                                                 <div  id="test" class="sel" style="opacity:1;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user ;}}
                                                              </b>
                                                            </font>
                                                  </div>

                                                 }




                                 {{$user = DB::table($n)->where('poste',  '=', 'FC2')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}

                                                 <div  id="test" class="sel" style="opacity:0.4;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user ;}}
                                                              </b>
                                                            </font>
                                                  </div>
                                                 }

                                 {{$user = DB::table($n)->where('poste',  '=', 'FC3')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 }}


                                                 <div  id="test" class="sel" style="opacity:0.4;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              {{ $user ;}}
                                                              </b>
                                                            </font>
                                                  </div>
                                                 }





                                 </div>
                              </div>       
      </div>


      <div id="footer1">


            <select id="select" style="left:-40px;" multiple="multiple">
                      <option value="1">Choose your formation</option>

                      <optgroup label="Most"> 
                        <option value="9">4-2-3-1</option>
                        <option value="2">4-3-2-1</option>
                        <option value="7">4-2-1-3</option>
                        <option value="1">4-4-2</option>
                        <option value="3">4-3-3</option>
                      </optgroup>


                      <optgroup label="Classic"> 
                            <option value="4">4-2-2-2</option>
                            <option value="8">5-3-2</option>
                            <option value="5">4-4-1-1</option>
                            <option value="6">4-5-1</option>
                      </optgroup>
            </select>

      </div>


      <div id="footer2">


            <center><img   height="180" width="210"  src="../images/logos/tunisie/' . $n . '.png"></img></center>
            <div id="p1"> 
                   <center>
                           <font  size="2"  face="Comic Sans MS"  color="white">

                                  <b>

                                  {{  $Nomequipe = DB::table('team')->where('Nom',  '=', $n )->pluck('NomComplet');}}
                                  {{ $Nomequipe ;}}


                                  </b> 
                                  </br>
                                  <hr>

                                  <b> President : 

                                  {{  $Boss = DB::table('team')->where('Nom',  '=', $n )->pluck('NomPresident');}}
                                  {{$Boss ;}}    

                                   
                                  </b> 
                                  </br>
                                  <hr>

                                  <b> Entraineur : 

                                  {{  $Entraineur = DB::table('team')->where('Nom',  '=', $n )->pluck('Entraineur');}}
                                  {{$Entraineur ;}}
                                   

                                  </b> </br>
                                  <hr>

                                  <b> Stade : 

                                  {{  $stade = DB::table('team')->where('Nom',  '=', $n )->pluck('stade');}}
                                  {{$stade ;}}
                                      

                                  </b> 
                          </font>
                  </center>
            </div>
      </div>  
                  

      <div class="x3">
      <div  class="principal-container">
          <div class="container">
              <div class="page page-lock ng-scope">
                  <div class="lock-centered clearfix">
                      <div class="lock-container">
                          <section class="lock-box">
                              <div class="lock-user ng-binding">{{ $data['name'] }}</div>
                              <div class="lock-img"><img src="{{ $data['photo']}}"></div>
                          </section>
                      </div>
                  </div>
              </div>
          </div>
      </div>



                  </div>



        
      <div id="Score">

            <br/>
            <br/>
            <div id="match"><center>

                                   {{$a = DB::table('calendrier')->where('NomVisite',  '=', $n )->pluck('NomVisite');}}
                                   {{$b = DB::table('calendrier')->where('NomVisite',  '=', $n )->pluck('NomVisiteuse');}}



                      <img class="j1" id="Joueur" src="../images/logos/tunisie/' . $a . '.png"/>
                      <img class="j1" id="Joueur" src="../images/logos/tunisie/' . $b . '.png"/><br>


                      {{$date = DB::table('calendrier')->where('NomVisite',  '=', $n )->pluck('date');}}
                      {{$stade = DB::table('calendrier')->where('NomVisite',  '=', $n )->pluck('Stade');}}


                                   {{$date;}} à 14h:00
                                   <br>

                                   <b>{{$stade;}}</b>





                      </center></div>

                      <table border="1" id="t">
                                <tr>

                                       <td>
                                        {{$visite = DB::table('calendrier')->where('NomVisite',  '=', $n )->pluck('visite');}}
                                        {{$visite ;}} 
                                       </td>

                                      <td>
                                      <input placeholder="-" type="text" name="s1" size="1" maxlength="2">
                                      </td>

                                </tr>


                                <tr>
                                       <td>
                                        {{$visiteuse = DB::table('calendrier')->pluck('visiteuse');}}
                                        {{$visiteuse ;}}

                                       </td>
                                      <td>
                                      <input placeholder="-" type="text" name="s2" size="1" maxlength="2">
                                      </td>

                                </tr>


                                <tr>
                                      <td colspan="2">
                                          <center>
                                            <input type="Submit" value="Envoyer"/>
                                          </center>
                                      </td>
                                </tr>
                      </table>
            </div>

      </div>
        
  </body>
</html>
@endif