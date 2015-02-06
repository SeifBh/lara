
$(function(){
             
 
  
          
 //Methode Plus Courte
// Redirection Url Avec nom de l'equipe
 	  $("#divchoix #im").click(function() {
 s = $(this).attr('class');
  document.location.href="Tunisie/"+ s;

});

//Methode Plus Courte 
/*
$("#divchoix #im").mouseenter(function() {
 s = $(this).attr('class');
$("#divhover").html('<br><br><br><img top=320 align=center width=170 height=150 src=./images/logos/' + s +'.png> </img></br> 14 Equipes'); 

});

*/





$( "#image #im" ).mouseenter(function() {
 s = $(this).attr('class');

$("#divhover").html('<br><br><br><img top=520px align=center width=230px height=210px src=./images/logos/Tunisie/'+ s +'.png> </img></br>'); 

});

$( "#divchoix" ).mouseleave(function() {
 s = $(this).attr('class');

$("#divhover").html('<br><br><br><img top=520px align=center width=230px height=210px src=./images/ligues/Comingsoon.png> </img></br>'); 

});





});