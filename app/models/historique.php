<?php

class Historique extends Eloquent {

    public function historique()
    {
        return $this->belongsTo('match');
    }
}