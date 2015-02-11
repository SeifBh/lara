<?php

class Match extends Eloquent {

    public function match()
    {
        return $this->hasMany('historique');
    }
}