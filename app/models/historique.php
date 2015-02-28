<?php


use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Historique extends Eloquent  {



	protected $table = 'history';

	public function match()
    {
        return $this->belongsTo('Match', 'match_id');
    }


}




?>


