<?php

class Equipe extends Eloquent {

	protected $table = 'team';
	protected $primaryKey = "team_id";
		public static $returnable = ['team_id'];

    protected $fillable = array('name', 'team_id');

    
}