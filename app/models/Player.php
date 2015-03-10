<?php

class Player extends Eloquent {

	protected $table = 'player';
    protected $fillable = ['name','player_id'];

	protected $primaryKey = "player_id";

}