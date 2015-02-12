<?php
echo HTML::style('./css/stylesequipes.css');
?>
<!doctype html>
<html lang="fr">
<head>



  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="language" content="en" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> 
  <!-- Include the heartcode canvasloader js file -->
  <script src="http://heartcode-canvasloader.googlecode.com/files/heartcode-canvasloader-min-0.9.1.js"></script>
  <script src="https://raw.githubusercontent.com/heartcode/CanvasLoader/master/js/heartcode-canvasloader.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
  <!-- jQuery Touch Punch - Enable Touch Drag and Drop -->
  <script src="../core/vendor/jquery.touch-punch.min.js"></script>
  <!-- jQuery.Shapeshift -->
  <script src="../core/jquery.shapeshift.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script type="text/javascript" src="jquery-1.4.2.min.js"></script>
  <script type="text/javascript" src="jquery-ui-1.8.custom.min.js"></script>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script> 

{{ HTML::script('js/manager.js') }}

</head>
<body>


<div id="contenue"></div>
<div id="pos"><a href="/Tunisie" > <img src="../images/prec.png" align="left" style="height:45px;width:45px;"></img></a> </div>
<div id="mil">
         
        <div id="stade">


                <div id="sor">
                      <div id="Joueur1" class="ui-draggable" style="position: relative; left: 210px; top: 500px;">
                        <img class="j1" id="Joueur" src="../images/{{$y}}.png">
                          <div id="ok1" class="ui-sortable">
                          

                                @if(!empty($GK1))
                                <div  id="test" class="sel" style="opacity:1;">
                                       <font face="Comic Sans MS" size="2">
                                          <b>{{$GK1}}</b>
                                        </font>
                                </div>
                                @endif


                                @if(!empty($GK2))
                                <div  id="test" class="sel" style="opacity:0.4;">
                                       <font face="Comic Sans MS" size="2">
                                          <b>{{$GK2}}</b>
                                        </font>
                                </div>
                                @endif

                                @if(!empty($GK3))
                                <div  id="test" class="sel" style="opacity:0.4;">
                                       <font face="Comic Sans MS" size="2">
                                          <b>{{$GK3}}</b>
                                        </font>
                                </div>
                                @endif



                        </div></div>



                          <div id="Joueur2" class="ui-draggable"  style="position: relative; left: 370px; top: 275px;">
                        <img class="j2" id="Joueur" src="../images/{{$y}}.png">
                          <div id="ok2" class="ui-sortable">

                                @if(!empty($DR1))
                                  <div  id="test" class="sel" style="opacity:1;">
                                         <font face="Comic Sans MS" size="2">
                                            <b>{{$DR1}}</b>
                                          </font>
                                  </div>
                                @endif

                                @if(!empty($DR2))
                                  <div  id="test" class="sel" style="opacity:0.4;">
                                         <font face="Comic Sans MS" size="2">
                                            <b>{{$DR2}}</b>
                                          </font>
                                  </div>
                                @endif


                                @if(!empty($DR3))
                                  <div  id="test" class="sel" style="opacity:0.4;">
                                         <font face="Comic Sans MS" size="2">
                                            <b>{{$DR3}}</b>
                                          </font>
                                  </div>
                                @endif




                                </div></div>








                    <div id="Joueur3" class="ui-draggable"  style="position: relative; left: 50px; top: 198px;">
                        <img class="j3" id="Joueur" src="../images/{{$y}}.png">
                          <div id="ok3" class="ui-sortable">

                                @if(!empty($DL1))
                                  <div  id="test" class="sel" style="opacity:1;">
                                         <font face="Comic Sans MS" size="2">
                                            <b>{{$DL1}}</b>
                                          </font>
                                  </div>
                                @endif

                                @if(!empty($DL2))
                                  <div  id="test" class="sel" style="opacity:0.4;">
                                         <font face="Comic Sans MS" size="2">
                                            <b>{{$DL2}}</b>
                                          </font>
                                  </div>
                                @endif

                                @if(!empty($DL3))
                                  <div  id="test" class="sel" style="opacity:0.4;">
                                         <font face="Comic Sans MS" size="2">
                                            <b>{{$DL3}}</b>
                                          </font>
                                  </div>
                                @endif

                   </div></div>


    
                   <div id="Joueur4" class="ui-draggable"   style="position: relative; left: 150px; top: 155px;">
                        <img class="j4" id="Joueur" src="../images/{{$y}}.png">
                          <div id="ok4" class="ui-sortable">

                                @if(!empty($DC1))
                                  <div  id="test" class="sel" style="opacity:1;">
                                         <font face="Comic Sans MS" size="2">
                                            <b>{{$DC1}}</b>
                                          </font>
                                  </div>
                                @endif



                                @if(!empty($DC2))
                                  <div  id="test" class="sel" style="opacity:0.4;">
                                         <font face="Comic Sans MS" size="2">
                                            <b>{{$DC2}}</b>
                                          </font>
                                  </div>
                                @endif




                     </div></div>




                    <div id="Joueur5" class="ui-draggable"  style="position: relative; left: 260px; top: 80px;">
                        <img class="j5" id="Joueur" src="../images/{{$y}}.png">
                          <div id="ok5" class="ui-sortable">

                                @if(!empty($DC3))
                                  <div  id="test" class="sel" style="opacity:1;">
                                         <font face="Comic Sans MS" size="2">
                                            <b>{{$DC3}}</b>
                                          </font>
                                  </div>
                                @endif


                                @if(!empty($DC4))
                                  <div  id="test" class="sel" style="opacity:0.4;">
                                         <font face="Comic Sans MS" size="2">
                                            <b>{{$DC4}}</b>
                                          </font>
                                  </div>
                                @endif




                     </div></div>










                  <div id="Joueur6" class="ui-draggable"  style="position: relative; left: 260px; top: -130px;">
                        <img class="j6" id="Joueur" src="../images/{{$y}}.png">
                          <div id="ok6" class="ui-sortable">


                                @if(!empty($MCD1))                             
                                  <div  id="test" class="sel" style="opacity:1;">
                                         <font face="Comic Sans MS" size="2">
                                            <b>{{$MCD1}}</b>
                                          </font>
                                  </div>
                                @endif


                                @if(!empty($MCD2))
                                  <div  id="test" class="sel" style="opacity:0.4;">
                                         <font face="Comic Sans MS" size="2">
                                            <b>{{$MCD2}}</b>
                                          </font>
                                  </div>
                                @endif

                                @if(!empty($MCD3))
                                  <div  id="test" class="sel" style="opacity:0.4;">
                                         <font face="Comic Sans MS" size="2">
                                            <b>{{$MCD3}}</b>
                                          </font>
                                  </div>
                                @endif


                            </div></div>








                    <div id="Joueur7" class="ui-draggable"  style="position: relative; left: 150px; top: -205px;">
                        <img class="j7" id="Joueur" src="../images/{{$y}}.png">
                          <div id="ok7" class="ui-sortable">

                                @if(!empty($MCG1))
                                  <div  id="test" class="sel" style="opacity:1;">
                                         <font face="Comic Sans MS" size="2">
                                            <b>{{$MCG1}}</b>
                                          </font>
                                  </div>
                                @endif

                                @if(!empty($MCG2))
                                  <div  id="test" class="sel" style="opacity:0.4;">
                                         <font face="Comic Sans MS" size="2">
                                            <b>{{$MCG2}}</b>
                                          </font>
                                  </div>
                                @endif

                                @if(!empty($MCG3))
                                  <div  id="test" class="sel" style="opacity:0.4;">
                                         <font face="Comic Sans MS" size="2">
                                            <b>{{$MCG3}}</b>
                                          </font>
                                  </div> 
                                @endif                   

                    </div></div>



          <div id="Joueur8" class="ui-draggable" style="position: relative; left: 50px; top: -395px;">
                        <img class="j8" id="Joueur" src="../images/{{$y}}.png">
                          <div id="ok8" class="ui-sortable">


                                @if(!empty($AC1))
                                  <div  id="test" class="sel" style="opacity:1;">
                                         <font face="Comic Sans MS" size="2">
                                            <b>{{$AC1}}</b>
                                          </font>
                                  </div>
                                @endif

                                @if(!empty($AC2))
                                  <div  id="test" class="sel" style="opacity:0.4;">
                                         <font face="Comic Sans MS" size="2">
                                            <b>{{$AC2}}</b>
                                          </font>
                                  </div>
                                @endif

                                @if(!empty($AC3))
                                  <div  id="test" class="sel" style="opacity:0.4;">
                                         <font face="Comic Sans MS" size="2">
                                            <b>{{$AC3}}</b>
                                          </font>
                                  </div>
                                @endif


         </div></div>






                      <div id="Joueur9" class="ui-draggable" style="position: relative; left: 370px; top: -470px;">
                        <img class="j9" id="Joueur" src="../images/{{$y}}.png">
                          <div id="ok9" class="ui-sortable">

                                @if(!empty($AR1))
                                  <div  id="test" class="sel" style="opacity:1;">
                                         <font face="Comic Sans MS" size="2">
                                            <b>{{$AR1}}</b>
                                          </font>
                                  </div>
                                @endif


                                @if(!empty($AR1))
                                  <div  id="test" class="sel" style="opacity:0.4;">
                                         <font face="Comic Sans MS" size="2">
                                            <b>{{$AR2}}</b>
                                          </font>
                                  </div>
                                @endif


                                @if(!empty($AR2))
                                  <div  id="test" class="sel" style="opacity:0.4;">
                                         <font face="Comic Sans MS" size="2">
                                            <b>{{$AR3}}</b>
                                          </font>
                                  </div>
                                @endif

                          </div></div>






                <div id="Joueur10" class="ui-draggable"style="position: relative; left: 150px; top: -620px;">
                        <img class="j10" id="Joueur" src="../images/{{$y}}.png">
                          <div id="ok10" class="ui-sortable">

                                @if(!empty($AL1))
                                  <div  id="test" class="sel" style="opacity:1;">
                                         <font face="Comic Sans MS" size="2">
                                            <b>{{$AL1}}</b>
                                          </font>
                                  </div>
                                @endif


                                @if(!empty($AL2))
                                  <div  id="test" class="sel" style="opacity:0.4;">
                                         <font face="Comic Sans MS" size="2">
                                            <b>{{$AL2}}</b>
                                          </font>
                                  </div>
                                @endif


                                @if(!empty($AL3))
                                  <div  id="test" class="sel" style="opacity:0.4;">
                                         <font face="Comic Sans MS" size="2">
                                            <b>{{$AL3}}</b>
                                          </font>
                                  </div>
                                @endif


                         </div>
                 </div>











              <div id="Joueur11" class="ui-draggable" style="position: relative; left: 260px; top: -695px;">
                        <img class="j11" id="Joueur" src="../images/{{$y}}.png">
                          <div id="ok11" class="ui-sortable">

                                @if(!empty($FC1))                            
                                  <div  id="test" class="sel" style="opacity:1;">
                                         <font face="Comic Sans MS" size="2">
                                            <b>{{$FC1}}</b>
                                          </font>
                                  </div>
                                @endif

                                @if(!empty($FC2))
                                  <div  id="test" class="sel" style="opacity:0.4;">
                                         <font face="Comic Sans MS" size="2">
                                            <b>{{$FC2}}</b>
                                          </font>
                                  </div>
                                @endif

                                @if(!empty($FC3))
                                  <div  id="test" class="sel" style="opacity:0.4;">
                                         <font face="Comic Sans MS" size="2">
                                            <b>{{$FC3}}</b>
                                          </font>
                                  </div>
                                @endif
                           </div>
              </div>







                

</div></div>
       
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


    <center><img   height="180" width="210"  src="../images/logos/{{$x}}/{{$y}}.png"></img></center>

      <div id="p1"> 
               <center>
                    <font  size="2"  face="Comic Sans MS"  color="white">
                        <b>{{$z}}</b> 
                      </br><hr>

                        <b> President : {{$President}}</b> 
                        </br><hr>

                        <b> Entraineur : {{$Entraineur}}</b> </br>
                        <hr>

                        <b> Stade : {{$stade}}</b> 
                    </font>
              </center>
      </div>
</div>





<div id="Score">

      <br/>
      <br/>
          <div id="match">
                          <center>


                         <img class="j1" id="Joueur" src="../images/logos/{{$x}}/{{$y}}.png"/>
                         <img class="j1" id="Joueur" src="../images/logos/{{$x}}/{{$z3}}.png"/><br>


                                    {{$date}} 
                                          </br>
                                    {{$lieu}}






                        </center>
          </div>

        <table border="1" id="t">
                  <tr>

                        <td>{{$nomEquipe1}}</td>
                        <td>
                          <input placeholder="-" type="text" name="p1" id="name" size="1" maxlength="2">
                        </td>
                  </tr>


                  <tr>
                        <td>{{$nomEquipe2}}
                        </td>
                        <td>
                          <input placeholder="-" type="text" name="p2" id="name" size="1" maxlength="2">
                        </td>
                  </tr>


                  <tr>
                          <td colspan="2">
                              <center>
                                <input type="Submit" value="Envoyer"/>
                            {{Form::hidden('id_match', $id_match)}}

                              </center>
                         </td>
                  </tr>
        </table>

</div>
</div>




  
  
</body>
</html>
