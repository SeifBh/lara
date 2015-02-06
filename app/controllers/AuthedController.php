<?php

class AuthedController extends \BaseController {

	public function __construct()
    {    	
        $this->beforeFilter('auth');
    }

}
