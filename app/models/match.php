<?php

class Match extends Eloquent {

	protected $primaryKey = "match_id";
	public static $returnable = ['nomEquipe1', 'nomEquipe2'];
	protected $table = 'match';

}