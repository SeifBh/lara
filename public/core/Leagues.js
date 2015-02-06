
$(function(){
           
 
  

$( "#divchoix" ).mouseleave(function() {

$("#divhover").html('<br><br><br><img top=320 align=center width=250 height=200 src=./images/Ligues/ComingSoon.png> </img></br> '); 

});


$( ".box1" ).mouseenter(function() {

$("#divhover").html('<br><br><br><img top=320 align=center width=220 height=220 src=./images/Ligues/tunisieGrand.png> </img></br> '); 

});




$( ".box1" ).click(function() {
document.location.href="Tunisie";

});


$( ".box2" ).mouseenter(function() {

$("#divhover").html('<br><br><br><img top=320 align=center width=220 height=220 src=./images/Ligues/bbva.png> </img></br> '); 

});


$( ".box2" ).click(function() {
document.location.href="BBva";

});


$( ".box3" ).mouseenter(function() {

$("#divhover").html('<br><br><br><img top=320 align=center  width=220 height=220  src=./images/Ligues/p_ligue.png> </img></br> '); 

});


$( ".box3" ).click(function() {
document.location.href="PremierLeague";

});


$( ".box4" ).mouseenter(function() {

$("#divhover").html('<br><br><br><img top=320 align=center  width=220 height=220  src=./images/Ligues/italie.png> </img></br> '); 

});



$( ".box4" ).click(function() {
document.location.href="Italie";

});




$( ".box5" ).mouseenter(function() {

$("#divhover").html('<br><br><br><img top=320 align=center width=220 height=220  src=./images/Ligues/ligue1.png> </img></br> '); 

});




$( ".box5" ).click(function() {
document.location.href="League1";

});





});
