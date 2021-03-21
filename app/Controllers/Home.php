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

	public function frontend()
	{
		echo view('Layout/frontend');
		echo view('Layout/hlava');
		echo view('Layout/menu');		
		echo view('Layout/pata');
		

	}



}
