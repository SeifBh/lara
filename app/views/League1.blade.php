    <link rel="stylesheet" type="text/css" href="./css/style0.css" media="screen" />
 
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="jquery.mCustomScrollbar.concat.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script type="text/javascript">


$(function(){
             
 
  
          
 //Methode Plus Courte
// Redirection Url Avec nom de l'equipe
 	  $("#divchoix #im").click(function() {
 s = $(this).attr('class');
  document.location.href="BBva/"+ s;

});

//Methode Plus Courte 
/*
$("#divchoix #im").mouseenter(function() {
 s = $(this).attr('class');
$("#divhover").html('<br><br><br><img top=320 align=center width=170 height=150 src=./images/logos/' + s +'.png> </img></br> 14 Equipes'); 

});

*/



$( ".esperance" ).mouseenter(function() {

$("#divhover").html('<br><br><br><img top=520px align=center width=230px height=210px src=./images/logos/esperance.png> </img></br>'); 

});

$( ".club_africain" ).mouseenter(function() {

$("#divhover").html('<br><br><br><img top=520px align=center width=220px height=210px src=./images/logos/club_africain.png> </img></br>'); 

});









});


        </script>

@extends('temp_League1')

@section('contenu')
    {{ Form::open(array('url' => 'users')) }}
        
	{{ Form::close() }}
@stop