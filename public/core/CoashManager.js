

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