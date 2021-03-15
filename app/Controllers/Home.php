<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		
		echo view('Layout/hlava');
		echo view('Layout/menu');		
		echo view('Layout/pata');
	}
}
