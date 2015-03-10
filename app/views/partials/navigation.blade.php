<?php
echo HTML::style('./css/stylesequipes.css');
?>


<div id="cssmenu">
<ul>
   <li class="active"><a href="/"><span>Home</span></a></li>
   <li class="notactive"><a href="/Historique"><span>Historique</span></a></li>
   <li class="notactive"><a href="/Score"><span>SCORE</span></a></li>

   <li class="notactive"><a target="_blank" href="https://www.facebook.com"><span>{{$data['name']}}</span></a></li>

</ul>

</div>