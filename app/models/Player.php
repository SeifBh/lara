<?php

class Player extends Eloquent {

	protected $table = 'player';
    protected $fillable = ['name','player_id'];

	protected $primaryKey = "player_id";

		public function team()
    {
        return $this->belongsTo('Team', 'team_id');
    }

}