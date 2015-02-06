
 <script type="text/javascript">


$(function(){
           
 
  
            $("#ok").mouseenter(function(){
                $(this).animate({ opacity: 90},10);
                $( "#ok" ).fadeTo( "fast" , 0.7);
            });


            $("#ok").mouseleave(function(){
                $( "#ok" ).fadeTo( "fast" , 1);
            });

            $("#div3").mouseenter(function(){
                $(this).animate({ opacity: 90},10);
                $( "#div3" ).fadeTo( "fast" , 0.7);
            });

            $("#div3").mouseleave(function(){
                $( "#div3" ).fadeTo( "fast" , 1);
            });

function tunisia()
{
var y = $("#container").children().length;
var premier = $('#Image:first').text();
alert(premier);
}



$( ".box1" ).mouseenter(function() {

$("#partie1").html('<br><br><br><img top=320 align=center width=150 height=150 src=./images/Ligues/tunisie.jpg> </img></br> 14 Equipes'); 

});
$( ".box1" ).click(function() {
document.location.href="l_tunisie.php";

});


$( ".box2" ).mouseenter(function() {
$("#partie1").html('<br><br><br><img width=150 height=150 src=./images/Ligues/bbva.png> </img>'); 
});

$( ".box3" ).mouseenter(function() {
$("#partie1").html('<br><br><br><img width=150 height=150 src=./images/Ligues/p_lige.jpg> </img>'); 
});


$( ".box4" ).mouseenter(function() {
$("#partie1").html('<br><br><br><img  width=150 height=150 src=./images/Ligues/italie.jpg> </img>'); 
});



$( ".box5" ).mouseenter(function() {
$("#partie1").html('<br><br><br><img width=150 height=150  src=./images/Ligues/tunisie.jpg> </img>'); 
});

$( ".box6" ).mouseenter(function() {
$("#partie1").html('<br><br><br><img width=150 height=150 src=./images/Ligues/fr.gif> </img>'); 
});


});

        </script>