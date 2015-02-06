

$(function(){









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












var n = $( "#sor .ui-draggable .ui-sortable div" ).length;

for (var j = 0 ; j < 4  ;j=j+2)
{
$("#sor .ui-draggable .ui-sortable div").eq(j).css("opacity", "1");
}


for (var j = 3 ; j < n  ;j=j+2)
{
$("#sor .ui-draggable .ui-sortable div").eq(j).css("opacity", "1");
}
for (var i = 1 ; i < 4 ;i=i+2)
{
$("#sor .ui-draggable .ui-sortable div").eq(i).css("opacity", "0.4");
}


for (var i = 4 ; i < n ;i=i+2)
{
$("#sor .ui-draggable .ui-sortable div").eq(i).css("opacity", "0.4");
}









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
    $("#Joueur11").css({"left":"1" , "top" :"-689" });
$("#Joueur10").css({"left":"-74" , "top" :"-524" });
$("#Joueur9").css({"left":"64" , "top" :"-448" });
$("#Joueur8").css({"left":"130" , "top" :"-271" });
$("#Joueur7").css({"left":"-143" , "top" :"-196px" });
$("#Joueur6").css({"left":"-7" , "top" :"-121" });
$("#Joueur5").css({"left":"59" , "top" :"81" });
$("#Joueur4").css({"left":"-63" , "top" :"157" });
$("#Joueur3").css({"left":"-168" , "top" :"215" });
$("#Joueur2").css({"left":"168" , "top" :"279" });
$("#Joueur1").css({"left":"1" , "top" :"490" });

  }
  else if (x == f442)
  {

$("#Joueur11").css({"left":"77" , "top" :"-709" });
$("#Joueur10").css({"left":"-71" , "top" :"-631" });
$("#Joueur9").css({"left":"-159" , "top" :"-442" });
$("#Joueur8").css({"left":"152" , "top" :"-363" });
$("#Joueur7").css({"left":"-55" , "top" :"-205" });
$("#Joueur6").css({"left":"60" , "top" :"-124" });

$("#Joueur5").css({"left":"59" , "top" :"81" });
$("#Joueur4").css({"left":"-63" , "top" :"157" });
$("#Joueur3").css({"left":"-168" , "top" :"215" });
$("#Joueur2").css({"left":"168" , "top" :"279" });
$("#Joueur1").css({"left":"1" , "top" :"490" });
  }
   else if (x == f433)
  {

$("#Joueur11").css({"left":"-8" , "top" :"-653" });
$("#Joueur10").css({"left":"-133" , "top" :"-636" });
$("#Joueur9").css({"left":"113" , "top" :"-567" });
$("#Joueur8").css({"left":"113" , "top" :"-313" });
$("#Joueur7").css({"left":"-134" , "top" :"-239" });
$("#Joueur6").css({"left":"-6" , "top" :"-104" });
$("#Joueur5").css({"left":"59" , "top" :"81" });
$("#Joueur4").css({"left":"-63" , "top" :"157" });
$("#Joueur3").css({"left":"-168" , "top" :"215" });
$("#Joueur2").css({"left":"168" , "top" :"279" });
$("#Joueur1").css({"left":"1" , "top" :"490" });

  }


    else if (x == f4222)
  {
    $("#Joueur11").css({"left":"77" , "top" :"-709" });
$("#Joueur10").css({"left":"-71" , "top" :"-631" });
$("#Joueur9").css({"left":"-71" , "top" :"-452" });
$("#Joueur8").css({"left":"77" , "top" :"-378" });
$("#Joueur7").css({"left":"77" , "top" :"-205" });
$("#Joueur6").css({"left":"-71" , "top" :"-124" });

$("#Joueur5").css({"left":"59" , "top" :"81" });
$("#Joueur4").css({"left":"-63" , "top" :"157" });
$("#Joueur3").css({"left":"-168" , "top" :"215" });
$("#Joueur2").css({"left":"168" , "top" :"279" });
$("#Joueur1").css({"left":"1" , "top" :"490" });


  }
   else if (x == f4411)
  {
    $("#Joueur11").css({"left":"-2" , "top" :"-704" });
$("#Joueur10").css({"left":"-2" , "top" :"-531" });
$("#Joueur9").css({"left":"49" , "top" :"-357" });
$("#Joueur8").css({"left":"169" , "top" :"-334" });
$("#Joueur7").css({"left":"-55" , "top" :"-206" });
$("#Joueur6").css({"left":"-169" , "top" :"-177" });


$("#Joueur5").css({"left":"59" , "top" :"81" });
$("#Joueur4").css({"left":"-63" , "top" :"157" });
$("#Joueur3").css({"left":"-168" , "top" :"215" });
$("#Joueur2").css({"left":"168" , "top" :"279" });
$("#Joueur1").css({"left":"1" , "top" :"490" });

  }

   else if (x == f451)
  {
    $("#Joueur11").css({"left":"-2" , "top" :"-653" });
$("#Joueur10").css({"left":"-2" , "top" :"-360" });
$("#Joueur9").css({"left":"49" , "top" :"-357" });
$("#Joueur8").css({"left":"169" , "top" :"-334" });
$("#Joueur7").css({"left":"-55" , "top" :"-206" });
$("#Joueur6").css({"left":"-169" , "top" :"-177" });

$("#Joueur5").css({"left":"59" , "top" :"81" });
$("#Joueur4").css({"left":"-63" , "top" :"157" });
$("#Joueur3").css({"left":"-168" , "top" :"215" });
$("#Joueur2").css({"left":"168" , "top" :"279" });
$("#Joueur1").css({"left":"1" , "top" :"490" });


  }

  else if (x == f4213)
  {
    

$("#Joueur11").css({"left":"2" , "top" :"-712" });
$("#Joueur10").css({"left":"-136" , "top" :"-638" });
$("#Joueur9").css({"left":"2" , "top" :"-461" });
$("#Joueur8").css({"left":"152" , "top" :"-489" });
$("#Joueur7").css({"left":"-55" , "top" :"-205" });
$("#Joueur6").css({"left":"60" , "top" :"-124" });

$("#Joueur5").css({"left":"59" , "top" :"81" });
$("#Joueur4").css({"left":"-63" , "top" :"157" });
$("#Joueur3").css({"left":"-168" , "top" :"215" });
$("#Joueur2").css({"left":"168" , "top" :"279" });
$("#Joueur1").css({"left":"1" , "top" :"490" });


  }

    else if (x == f532)
  {
    

$("#Joueur11").css({"left":"60" , "top" :"-702" });
$("#Joueur10").css({"left":"-48" , "top" :"-625" });
$("#Joueur9").css({"left":"-114" , "top" :"-405" });
$("#Joueur8").css({"left":"114" , "top" :"-327" });
$("#Joueur7").css({"left":"5" , "top" :"-186" });
$("#Joueur6").css({"left":"-2" , "top" :"11" });

$("#Joueur5").css({"left":"98" , "top" :"82" });
$("#Joueur4").css({"left":"-98" , "top" :"158" });
$("#Joueur3").css({"left":"-194" , "top" :"200" });
$("#Joueur2").css({"left":"196" , "top" :"273" });
$("#Joueur1").css({"left":"1" , "top" :"490" });


  }

     else if (x == f4231)
  {
    

$("#Joueur11").css({"left":"7" , "top" :"-699" });
$("#Joueur10").css({"left":"-146" , "top" :"-519" });
$("#Joueur9").css({"left":"8" , "top" :"-440" });
$("#Joueur8").css({"left":"152" , "top" :"-363" });
$("#Joueur7").css({"left":"-55" , "top" :"-205" });
$("#Joueur6").css({"left":"60" , "top" :"-124" });

$("#Joueur5").css({"left":"59" , "top" :"81" });
$("#Joueur4").css({"left":"-63" , "top" :"157" });
$("#Joueur3").css({"left":"-168" , "top" :"215" });
$("#Joueur2").css({"left":"168" , "top" :"279" });
$("#Joueur1").css({"left":"1" , "top" :"490" });


  }




});






            $(".sortable-item").click(function(){
               
                $(this).animate({ "border-color": "red" },10);
            });


  
            $(".sortable-item").mouseenter(function(){
               
                $(this).animate({ "border-color": "green" },10);
            });





});