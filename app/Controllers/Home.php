<?php

namespace App\Controllers;

class Home extends BaseController
{

	
	public function hlavni()
	{
		$this->ionAuth = new \IonAuth\Libraries\IonAuth();
		if(!$this->ionAuth->loggedIn())echo view('head');
		else echo view ('prihlaseni');
		echo view("uvod");
	}
}
