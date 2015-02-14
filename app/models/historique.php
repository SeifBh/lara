<?php


use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Historique extends Eloquent  {

	protected $primaryKey = "user_id";
	protected $primaryKey = "match_id";

	protected $table = 'historiquex';

	public function match()
    {
        return $this->belongsTo('Match', 'match_id');
    }


}




?>


