<?php


echo HTML::style('./css/stylesequipes.css');

echo '<!doctype html>
<html lang="fr">
<head>


    <meta charset="UTF-8">

 


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="language" content="en" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  
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
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
 
        <script type="text/javascript">


$(function(){

$(document).delegate("#simplestring", "click", function() {
  $(this).simpledialog({
    "mode" : "string",
    "prompt" : "What do you say?",
    "buttons" : {
      "OK": {
        click: function () {
          $("#dialogoutput").text($("#dialoglink").attr("data-string"));
        }
      },
      "Cancel": {
        click: function () { },
        icon: "delete",
        theme: "c"
      }
    }
  })
});


    $( ".ui-draggable" ).draggable({ containment: "#stade"});




$("#Joueur1").draggable();

$("#Joueur2").draggable();
$("#Joueur3").draggable();
$("#Joueur4").draggable();
$("#Joueur5").draggable();
$("#Joueur6").draggable();

$("#Joueur7").draggable();

$("#Joueur8").draggable();

$("#Joueur9").draggable();
$("#Joueur10").draggable();
$("#Joueur11").draggable();







$(".ui-sortable").sortable({
    connectWith: ".ui-sortable",
    placeholder: "placeholder",


    cursor: "pointer",



    start: function(event, ui) {


       },
        stop: function(event, ui) {
  
$(".ui-sortable").css("background-color", "transparent");

}

  });

                $("#ok1").sortable(
                {
                   update: function(event, ui)
                    {
                     var x = ui.item.index();
                      if (x == 0 )
                      {
                          $("#ok1 div").eq(0).css("opacity", "1");
                          $("#ok1 div").eq(1).css("opacity", "0.4");
                          $("#ok1 div").eq(2).css("opacity", "0.4");
                          $("#ok1 div").eq(3).css("opacity", "0.4");


                      }
                      else if ( x != 0)
                      {

                          $("#ok1 div").eq(0).css("opacity", "1");
                          $("#ok1 div").eq(1).css("opacity", "0.4");
                          $("#ok1 div").eq(2).css("opacity", "0.4");
                          $("#ok1 div").eq(3).css("opacity", "0.4");
                      }
                    }
                }

                  );

         
                $("#ok2").sortable(
                 {
                   update: function(event, ui)
                    {
                     var x = ui.item.index();
                      if (x == 0 )
                      {
                          $("#ok2 div").eq(0).css("opacity", "1");
                          $("#ok2 div").eq(1).css("opacity", "0.4");
                          $("#ok2 div").eq(2).css("opacity", "0.4");
                          $("#ok2 div").eq(3).css("opacity", "0.4");


                      }
                      else if ( x != 0)
                      {

                          $("#ok2 div").eq(0).css("opacity", "1");
                          $("#ok2 div").eq(1).css("opacity", "0.4");
                          $("#ok2 div").eq(2).css("opacity", "0.4");
                          $("#ok2 div").eq(3).css("opacity", "0.4");
                      }
                    } 
                }


                );


                $("#ok3").sortable(


                   {
                   update: function(event, ui)
                    {
                     var x = ui.item.index();
                      if (x == 0 )
                      {
                          $("#ok3 div").eq(0).css("opacity", "1");
                          $("#ok3 div").eq(1).css("opacity", "0.4");
                          $("#ok3 div").eq(2).css("opacity", "0.4");
                          $("#ok3 div").eq(3).css("opacity", "0.4");


                      }
                      else if ( x != 0)
                      {

                          $("#ok3 div").eq(0).css("opacity", "1");
                          $("#ok3 div").eq(1).css("opacity", "0.4");
                          $("#ok3 div").eq(2).css("opacity", "0.4");
                          $("#ok3 div").eq(3).css("opacity", "0.4");
                      }
                    } 
                }


);
                $("#ok4").sortable(


                   {
                   update: function(event, ui)
                    {
                     var x = ui.item.index();
                      if (x == 0 )
                      {
                          $("#ok4 div").eq(0).css("opacity", "1");
                          $("#ok4 div").eq(1).css("opacity", "0.4");
                          $("#ok4 div").eq(2).css("opacity", "0.4");
                          $("#ok4 div").eq(3).css("opacity", "0.4");


                      }
                      else if ( x != 0)
                      {

                          $("#ok4 div").eq(0).css("opacity", "1");
                          $("#ok4 div").eq(1).css("opacity", "0.4");
                          $("#ok4 div").eq(2).css("opacity", "0.4");
                          $("#ok4 div").eq(3).css("opacity", "0.4");
                      }
                    } 
                }


);
                $("#ok5").sortable(
                   {
                   update: function(event, ui)
                    {
                     var x = ui.item.index();
                      if (x == 0 )
                      {
                          $("#ok5 div").eq(0).css("opacity", "1");
                          $("#ok5 div").eq(1).css("opacity", "0.4");
                          $("#ok5 div").eq(2).css("opacity", "0.4");
                          $("#ok5 div").eq(3).css("opacity", "0.4");


                      }
                      else if ( x != 0)
                      {

                          $("#ok5 div").eq(0).css("opacity", "1");
                          $("#ok5 div").eq(1).css("opacity", "0.4");
                          $("#ok5 div").eq(2).css("opacity", "0.4");
                          $("#ok5 div").eq(3).css("opacity", "0.4");
                      }
                    } 
                }

);
                $("#ok6").sortable(

                   {
                   update: function(event, ui)
                    {
                     var x = ui.item.index();
                      if (x == 0 )
                      {
                          $("#ok6 div").eq(0).css("opacity", "1");
                          $("#ok6 div").eq(1).css("opacity", "0.4");
                          $("#ok6 div").eq(2).css("opacity", "0.4");
                          $("#ok6 div").eq(3).css("opacity", "0.4");


                      }
                      else if ( x != 0)
                      {

                          $("#ok6 div").eq(0).css("opacity", "1");
                          $("#ok6 div").eq(1).css("opacity", "0.4");
                          $("#ok6 div").eq(2).css("opacity", "0.4");
                          $("#ok6 div").eq(3).css("opacity", "0.4");
                      }
                    } 
                }


);
                $("#ok7").sortable(

                   {
                   update: function(event, ui)
                    {
                     var x = ui.item.index();
                      if (x == 0 )
                      {
                          $("#ok7 div").eq(0).css("opacity", "1");
                          $("#ok7 div").eq(1).css("opacity", "0.4");
                          $("#ok7 div").eq(2).css("opacity", "0.4");
                          $("#ok7 div").eq(3).css("opacity", "0.4");


                      }
                      else if ( x != 0)
                      {

                          $("#ok7 div").eq(0).css("opacity", "1");
                          $("#ok7 div").eq(1).css("opacity", "0.4");
                          $("#ok7 div").eq(2).css("opacity", "0.4");
                          $("#ok7 div").eq(3).css("opacity", "0.4");
                      }
                    } 
                }


);
                $("#ok8").sortable(

                   {
                   update: function(event, ui)
                    {
                     var x = ui.item.index();
                      if (x == 0 )
                      {
                          $("#ok8 div").eq(0).css("opacity", "1");
                          $("#ok8 div").eq(1).css("opacity", "0.4");
                          $("#ok8 div").eq(2).css("opacity", "0.4");
                          $("#ok8 div").eq(3).css("opacity", "0.4");


                      }
                      else if ( x != 0)
                      {

                          $("#ok8 div").eq(0).css("opacity", "1");
                          $("#ok8 div").eq(1).css("opacity", "0.4");
                          $("#ok8 div").eq(2).css("opacity", "0.4");
                          $("#ok8 div").eq(3).css("opacity", "0.4");
                      }
                    } 
                }


);
                $("#ok9").sortable(

                   {
                   update: function(event, ui)
                    {
                     var x = ui.item.index();
                      if (x == 0 )
                      {
                          $("#ok9 div").eq(0).css("opacity", "1");
                          $("#ok9 div").eq(1).css("opacity", "0.4");
                          $("#ok9 div").eq(2).css("opacity", "0.4");
                          $("#ok9 div").eq(3).css("opacity", "0.4");


                      }
                      else if ( x != 0)
                      {

                          $("#ok9 div").eq(0).css("opacity", "1");
                          $("#ok9 div").eq(1).css("opacity", "0.4");
                          $("#ok9 div").eq(2).css("opacity", "0.4");
                          $("#ok9 div").eq(3).css("opacity", "0.4");
                      }
                    } 
                }


);
                $("#ok10").sortable(
                   {
                   update: function(event, ui)
                    {
                     var x = ui.item.index();
                      if (x == 0 )
                      {
                          $("#ok10 div").eq(0).css("opacity", "1");
                          $("#ok10 div").eq(1).css("opacity", "0.4");
                          $("#ok10 div").eq(2).css("opacity", "0.4");
                          $("#ok10 div").eq(3).css("opacity", "0.4");


                      }
                      else if ( x != 0)
                      {

                          $("#ok10 div").eq(0).css("opacity", "1");
                          $("#ok10 div").eq(1).css("opacity", "0.4");
                          $("#ok10 div").eq(2).css("opacity", "0.4");
                          $("#ok10 div").eq(3).css("opacity", "0.4");
                      }
                    } 
                }

);
                $("#ok11").sortable(
                   {
                   update: function(event, ui)
                    {
                     var x = ui.item.index();
                      if (x == 0 )
                      {
                          $("#ok11 div").eq(0).css("opacity", "1");
                          $("#ok11 div").eq(1).css("opacity", "0.4");
                          $("#ok11 div").eq(2).css("opacity", "0.4");
                          $("#ok11 div").eq(3).css("opacity", "0.4");

                      }
                      else if ( x != 0)
                      {

                          $("#ok11 div").eq(0).css("opacity", "1");
                          $("#ok11 div").eq(1).css("opacity", "0.4");
                          $("#ok11 div").eq(2).css("opacity", "0.4");
                          $("#ok11 div").eq(3).css("opacity", "0.4");
                      }
                    } 
                }

);





















$("select").on("change", function() {

var x = $( "#select option:selected" ).text();
var f4321 = "4-3-2-1";
var f442  = "4-4-2";
var f433  = "4-3-3";
var f4222 = "4-2-2-2";
var f4411 = "4-4-1-1";
var f451 = "4-5-1";
var f4213 = "4-2-1-3";
var f532 = "5-3-2";
var f4231 = "4-2-3-1";



 if (x == f4321 )
  {
$("#Joueur11").css({"left":"208px" , "top" :"-709px" });
$("#Joueur10").css({"left":"148px" , "top" :"-536px" });
$("#Joueur9").css({"left":"348px" , "top" :"-357px" });
$("#Joueur8").css({"left":"270px" , "top" :"-385px" });
$("#Joueur7").css({"left":"79px" , "top" :"-207px" });
$("#Joueur6").css({"left":"211px" , "top" :"-92px" });
$("#Joueur5").css({"left":"260px" , "top" :"80px" });
$("#Joueur4").css({"left":"150px" , "top" :"155px" });
$("#Joueur3").css({"left":"50px" , "top" :"198px" });
$("#Joueur2").css({"left":"370px" , "top" :"275px" });
$("#Joueur1").css({"left":"210px" , "top" :"500px" });

  }
  else if (x == f442)
  {



$("#Joueur11").css({"left":"159px" , "top" :"-684px" });
$("#Joueur10").css({"left":"48px" , "top" :"-505px" });
$("#Joueur9").css({"left":"366px" , "top" :"-423px" });
$("#Joueur8").css({"left":"266px" , "top" :"-462px" });
$("#Joueur7").css({"left":"259px" , "top" :"-190px" });
$("#Joueur6").css({"left":"147px" , "top" :"-117" });

$("#Joueur5").css({"left":"260px" , "top" :"80px" });
$("#Joueur4").css({"left":"150px" , "top" :"155px" });
$("#Joueur3").css({"left":"50px" , "top" :"198px" });
$("#Joueur2").css({"left":"370px" , "top" :"275px" });
$("#Joueur1").css({"left":"210px" , "top" :"500px" });
  }
   else if (x == f433)
  {

$("#Joueur11").css({"left":"214px" , "top" :"-698px" });
$("#Joueur10").css({"left":"91px" , "top" :"-580px" });
$("#Joueur9").css({"left":"319px" , "top" :"-356px" });
$("#Joueur8").css({"left":"321px" , "top" :"-434px" });
$("#Joueur7").css({"left":"100px" , "top" :"-203px" });
$("#Joueur6").css({"left":"211px" , "top" :"-102px" });
$("#Joueur5").css({"left":"260px" , "top" :"80px" });
$("#Joueur4").css({"left":"150px" , "top" :"155px" });
$("#Joueur3").css({"left":"50px" , "top" :"198px" });
$("#Joueur2").css({"left":"370px" , "top" :"275px" });
$("#Joueur1").css({"left":"210px" , "top" :"500px" });

  }


    else if (x == f4222)
  {

    $("#Joueur11").css({"left":"159px" , "top" :"-684px" });
$("#Joueur10").css({"left":"265px" , "top" :"-610px" });
$("#Joueur9").css({"left":"370px" , "top" :"-470px" });
$("#Joueur8").css({"left":"54px" , "top" :"-391px" });
$("#Joueur7").css({"left":"128px" , "top" :"-191px" });
$("#Joueur6").css({"left":"291px" , "top" :"-115px" });

$("#Joueur5").css({"left":"260px" , "top" :"80px" });
$("#Joueur4").css({"left":"150px" , "top" :"155px" });
$("#Joueur3").css({"left":"50px" , "top" :"198px" });
$("#Joueur2").css({"left":"370px" , "top" :"275px" });
$("#Joueur1").css({"left":"210px" , "top" :"500px" });


  }
   else if (x == f4411)
  {
    $("#Joueur11").css({"left":"210" , "top" :"-708" });
$("#Joueur10").css({"left":"50px" , "top" :"-449px" });
$("#Joueur9").css({"left":"356px" , "top" :"-364px" });
$("#Joueur8").css({"left":"209px" , "top" :"-381px" });
$("#Joueur7").css({"left":"259px" , "top" :"-190px" });
$("#Joueur6").css({"left":"147px" , "top" :"-117" });

$("#Joueur5").css({"left":"260px" , "top" :"80px" });
$("#Joueur4").css({"left":"150px" , "top" :"155px" });
$("#Joueur3").css({"left":"50px" , "top" :"198px" });
$("#Joueur2").css({"left":"370px" , "top" :"275px" });
$("#Joueur1").css({"left":"210px" , "top" :"500px" });

  }

   else if (x == f451)
  {
    $("#Joueur11").css({"left":"210px" , "top" :"-708px" });
$("#Joueur10").css({"left":"48px" , "top" :"-517px" });
$("#Joueur9").css({"left":"363px" , "top" :"-442px" });
$("#Joueur8").css({"left":"260px" , "top" :"-304px" });
$("#Joueur7").css({"left":"211" , "top" :"-150" });
$("#Joueur6").css({"left":"134px" , "top" :"-153px" });

$("#Joueur5").css({"left":"260px" , "top" :"80px" });
$("#Joueur4").css({"left":"150px" , "top" :"155px" });
$("#Joueur3").css({"left":"50px" , "top" :"198px" });
$("#Joueur2").css({"left":"370px" , "top" :"275px" });
$("#Joueur1").css({"left":"210px" , "top" :"500px" });


  }

  else if (x == f4213)
  {
    

$("#Joueur11").css({"left":"208px" , "top" :"-706px" });
$("#Joueur10").css({"left":"75px" , "top" :"-639" });
$("#Joueur9").css({"left":"209px" , "top" :"-428px" });
$("#Joueur8").css({"left":"344px" , "top" :"-488px" });

$("#Joueur7").css({"left":"128px" , "top" :"-191px" });
$("#Joueur6").css({"left":"291px" , "top" :"-115px" });
$("#Joueur5").css({"left":"260px" , "top" :"80px" });
$("#Joueur4").css({"left":"150px" , "top" :"155px" });
$("#Joueur3").css({"left":"50px" , "top" :"198px" });
$("#Joueur2").css({"left":"370px" , "top" :"275px" });
$("#Joueur1").css({"left":"210px" , "top" :"500px" });

  }

    else if (x == f532)
  {
    

$("#Joueur11").css({"left":"260px" , "top" :"-695" });
$("#Joueur10").css({"left":"150px" , "top" :"-620px" });
$("#Joueur9").css({"left":"323px" , "top" :"-402px" });
$("#Joueur8").css({"left":"87px" , "top" :"-331px" });
$("#Joueur7").css({"left":"208px" , "top" :"-196px" });
$("#Joueur6").css({"left":"208" , "top" :"41px" });

$("#Joueur5").css({"left":"296px" , "top" :"91px" });
$("#Joueur4").css({"left":"118px" , "top" :"166px" });
$("#Joueur3").css({"left":"38px" , "top" :"183px" });
$("#Joueur2").css({"left":"378px" , "top" :"273px" });
$("#Joueur1").css({"left":"210px" , "top" :"500px" });


  }

     else if (x == f4231)
  {
    

$("#Joueur11").css({"left":"210px" , "top" :"-703px" });
$("#Joueur10").css({"left":"66px" , "top" :"-553px" });
$("#Joueur9").css({"left":"336px" , "top" :"-471px" });
$("#Joueur8").css({"left":"213px" , "top" :"-351px" });
$("#Joueur7").css({"left":"128px" , "top" :"-191px" });
$("#Joueur6").css({"left":"291px" , "top" :"-115px" });
$("#Joueur5").css({"left":"260px" , "top" :"80px" });
$("#Joueur4").css({"left":"150px" , "top" :"155px" });
$("#Joueur3").css({"left":"50px" , "top" :"198px" });
$("#Joueur2").css({"left":"370px" , "top" :"275px" });
$("#Joueur1").css({"left":"210px" , "top" :"500px" });


  }




});






            $(".sortable-item").click(function(){
               
                $(this).animate({ "border-color": "red" },10);
            });


  
            $(".sortable-item").mouseenter(function(){
               
                $(this).animate({ "border-color": "green" },10);
            });

$("#select2").change(function(){

       $("#sor").load("load.html");

  

});




});


</script>

    </head>
<body>


  <div id="contenue"></div>
<div id="pos"><a href="/Tunisie" > <img src="../images/prec.png" align="left" style="height:45px;width:45px;"></img></a> </div>


<div id="mil">
         
        <div id="stade">


                <div id="sor">
                      <div id="Joueur1" class="ui-draggable" style="position: relative; left: 210px; top: 500px;">
                        <img class="j1" id="Joueur" src="../images/' . $n . '.png">
                          <div id="ok1" class="ui-sortable">';



                          $user = DB::table($n)->where('poste',  '=', 'GK1')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel" style="opacity:1;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }




                           $user = DB::table($n)->where('poste',  '=', 'GK2')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel" style="opacity:0.4;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }








                          $user = DB::table($n)->where('poste',  '=', 'GK3')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel"  style="opacity:0.4;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }


                           echo'</div></div>';



                          echo '<div id="Joueur2" class="ui-draggable"  style="position: relative; left: 370px; top: 275px;">
                        <img class="j2" id="Joueur" src="../images/' . $n . '.png">
                          <div id="ok2" class="ui-sortable">';

                          $user = DB::table($n)->where('poste',  '=', 'DR1')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel" style="opacity:1;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }


                                            $user = DB::table($n)->where('poste',  '=', 'DR2')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel"  style="opacity:0.4;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }








                                              $user = DB::table($n)->where('poste',  '=', 'DR3')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel"  style="opacity:0.4;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }
                                                                     echo'</div></div>';









                    echo '<div id="Joueur3" class="ui-draggable"  style="position: relative; left: 50px; top: 198px;">
                        <img class="j3" id="Joueur" src="../images/' . $n . '.png">
                          <div id="ok3" class="ui-sortable">';

                          $user = DB::table($n)->where('poste',  '=', 'DL1')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel" style="opacity:1;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }


                                            $user = DB::table($n)->where('poste',  '=', 'DL2')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel"  style="opacity:0.4;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }








                                              $user = DB::table($n)->where('poste',  '=', 'DL3')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel"  style="opacity:0.4;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }
                                                                     echo'</div></div>';


    
                    echo '<div id="Joueur4" class="ui-draggable"   style="position: relative; left: 150px; top: 155px;">
                        <img class="j4" id="Joueur" src="../images/' . $n . '.png">
                          <div id="ok4" class="ui-sortable">';

                          $user = DB::table($n)->where('poste',  '=', 'DC1')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel" style="opacity:1;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }


                                            $user = DB::table($n)->where('poste',  '=', 'DC2')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel"  style="opacity:0.4;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }




                                                                     echo'</div></div>';




                    echo '<div id="Joueur5" class="ui-draggable"  style="position: relative; left: 260px; top: 80px;">
                        <img class="j5" id="Joueur" src="../images/' . $n . '.png">
                          <div id="ok5" class="ui-sortable">';

                          $user = DB::table($n)->where('poste',  '=', 'DC3')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel" style="opacity:1;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }


                                            $user = DB::table($n)->where('poste',  '=', 'DC4')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel"  style="opacity:0.4;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }




                                                                     echo'</div></div>';










                  echo '<div id="Joueur6" class="ui-draggable"  style="position: relative; left: 260px; top: -130px;">
                        <img class="j6" id="Joueur" src="../images/' . $n . '.png">
                          <div id="ok6" class="ui-sortable">';

                          $user = DB::table($n)->where('poste',  '=', 'MC1')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel" style="opacity:1;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }


                                            $user = DB::table($n)->where('poste',  '=', 'MC2')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel"  style="opacity:0.4;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }








                                              $user = DB::table($n)->where('poste',  '=', 'MC3')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel"  style="opacity:0.4;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }
                                                                     echo'</div></div>';








                    echo '<div id="Joueur7" class="ui-draggable"  style="position: relative; left: 150px; top: -205px;">
                        <img class="j7" id="Joueur" src="../images/' . $n . '.png">
                          <div id="ok7" class="ui-sortable">';

                          $user = DB::table($n)->where('poste',  '=', 'MCX3')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel" style="opacity:1;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }


                                            $user = DB::table($n)->where('poste',  '=', 'MCX4')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel"  style="opacity:0.4;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }








                                              $user = DB::table($n)->where('poste',  '=', 'MCX5')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel"  style="opacity:0.4;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }
                                                                     echo'</div></div>';












          echo '<div id="Joueur8" class="ui-draggable" style="position: relative; left: 50px; top: -395px;">
                        <img class="j8" id="Joueur" src="../images/' . $n . '.png">
                          <div id="ok8" class="ui-sortable">';

                          $user = DB::table($n)->where('poste',  '=', 'AC1')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel" style="opacity:1;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }


                                            $user = DB::table($n)->where('poste',  '=', 'AC2')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel"  style="opacity:0.4;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }








                                              $user = DB::table($n)->where('poste',  '=', 'AC3')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel"   style="opacity:0.4;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }
                                                                     echo'</div></div>';






                         echo '<div id="Joueur9" class="ui-draggable" style="position: relative; left: 370px; top: -470px;">
                        <img class="j9" id="Joueur" src="../images/' . $n . '.png">
                          <div id="ok9" class="ui-sortable">';

                          $user = DB::table($n)->where('poste',  '=', 'AR1')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel" style="opacity:1;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }


                                            $user = DB::table($n)->where('poste',  '=', 'AR2')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel"  style="opacity:0.4;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }








                                              $user = DB::table($n)->where('poste',  '=', 'AR3')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel"  style="opacity:0.4;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }
                                                                     echo'</div></div>';






                echo '<div id="Joueur10" class="ui-draggable"style="position: relative; left: 150px; top: -620px;">
                        <img class="j10" id="Joueur" src="../images/' . $n . '.png">
                          <div id="ok10" class="ui-sortable">';

                          $user = DB::table($n)->where('poste',  '=', 'AL1')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel" style="opacity:1;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }


                                            $user = DB::table($n)->where('poste',  '=', 'AL2')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel"  style="opacity:0.4;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }








                                              $user = DB::table($n)->where('poste',  '=', 'AL3')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel"  style="opacity:0.4;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }
                                                                     echo'</div></div>';











              echo '<div id="Joueur11" class="ui-draggable" style="position: relative; left: 260px; top: -695px;">
                        <img class="j11" id="Joueur" src="../images/' . $n . '.png">
                          <div id="ok11" class="ui-sortable">';

                          $user = DB::table($n)->where('poste',  '=', 'FC1')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel" style="opacity:1;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }


                                            $user = DB::table($n)->where('poste',  '=', 'FC2')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel"  style="opacity:0.4;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }








                                              $user = DB::table($n)->where('poste',  '=', 'FC3')->pluck('Nom');
                                         if ($user != '')
                                         {
                                             echo '<div  id="test" class="sel"  style="opacity:0.4;">
                                                      <font face="Comic Sans MS" size="2"><b>' ;
                                                        echo $user ;
                                                              echo '</b></font>
                                                   </div>';

                                          }
                                                                     echo'</div></div>';







                

        echo'</div></div>
       
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

<b>';


  $Nomequipe = DB::table('team')->where('Nom',  '=', $n )->pluck('NomComplet');
   echo $Nomequipe ;

 echo '</b> </br>
<hr>

<b> President : ';

  $Boss = DB::table('team')->where('Nom',  '=', $n )->pluck('NomPresident');
   echo $Boss ;

 echo '</b> </br>
<hr>

<b> Entraineur : ';


  $Entraineur = DB::table('team')->where('Nom',  '=', $n )->pluck('Entraineur');
   echo $Entraineur ;

  echo' </b> </br>
<hr>

<b> Stade : ';


  $stade = DB::table('team')->where('Nom',  '=', $n )->pluck('stade');
   echo $stade ;

 echo'</b> 
</font>
</center>
</div>

<div id="LoginFB">


      <div  class="principal-container">
          <div class="container">
              <div class="page page-lock ng-scope">
                  <div class="lock-centered clearfix">
                      <div class="lock-container">
                          <section class="lock-box">
                              <div class="lock-user ng-binding">


';

?>
@yield('fbName')

<?php 
echo'

                              </div>
                              <div class="lock-img">';

?>
@yield('fbPhoto')

<?php 
echo'</div>
                          </section>
                      </div>
                  </div>
              </div>
          </div>








</div>





<div id="option">

ok
</div>

<div id="Score">

Message de Bienvenue
<br/>
<br/>
<div id="match"><center>';

            $a = DB::table('calendrier')->where('NomVisite',  '=', $n )->pluck('NomVisite');
                        $b = DB::table('calendrier')->where('NomVisite',  '=', $n )->pluck('NomVisiteuse');


 echo'<img class="j1" id="Joueur" src="../images/logos/tunisie/' . $a . '.png"/>
  <img class="j1" id="Joueur" src="../images/logos/tunisie/' . $b . '.png"/><br>';


            $date = DB::table('calendrier')->where('NomVisite',  '=', $n )->pluck('date');

            $stade = DB::table('calendrier')->where('NomVisite',  '=', $n )->pluck('Stade');

            echo $date .'à 14h:00<br><b>';

            echo $stade .'</b>';





echo'</center></div>

<table border="1" id="t">
    <tr>

          <td>';
          
  $visite = DB::table('calendrier')->where('NomVisite',  '=', $n )->pluck('visite');


               echo  $visite ;

         echo' </td>
          <td>
          <input placeholder="-" type="text" name="s1" size="1" maxlength="2">

          </td>
    </tr>


    <tr>
          <td>';
            $visiteuse = DB::table('calendrier')->pluck('visiteuse');

              echo $visiteuse ;

          echo'</td>
          <td>
          <input placeholder="-" type="text" name="s2" size="1" maxlength="2">

          </td>
    </tr>
    <tr>
    <td colspan="2">
    <center><input type="Submit" value="Envoyer"/></center>
    </td>
    </tr>
</table>
</div>

  </div>




  
  
</body>
</html>
';
?>