
                            <div id="Joueur1" class="ui-draggable" style="position: relative; left: 210px; top: 500px;">
                              <img class="j1" id="Joueur" src="../images/' . $n . '.png">
                                <div id="ok1" class="ui-sortable">';


?>

                                 <?php  $user = DB::table($n)->where('poste',  '=', 'GK1')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 ?>

                                                 <div  id="test" class="sel" style="opacity:1;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              <?php echo  $user; }?>
                                                              </b>
                                                            </font>
                                                  </div>


                                 <?php  $user = DB::table($n)->where('poste',  '=', 'GK2')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 ?>

                                                 <div  id="test" class="sel" style="opacity:0.4;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              <?php echo  $user; }?>
                                                              </b>
                                                            </font>
                                                  </div>


                                 <?php  $user = DB::table($n)->where('poste',  '=', 'GK3')->pluck('Nom');

                                               if ($user != '')
                                               {
                                 ?>

                                                 <div  id="test" class="sel" style="opacity:0.4;">
                                                            <font face="Comic Sans MS" size="2">
                                                              <b>
                                                              <?php echo  $user; }?>
                                                              </b>
                                                            </font>
                                                  </div>


                                                





                                 </div>
                              </div>
