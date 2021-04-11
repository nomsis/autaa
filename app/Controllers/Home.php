<?php
namespace App\Controllers;
use App\Models\Hlavnimodel;
use App\Models\Dily;
use App\Models\Zakaznici;
use App\Models\Zamestnanci;
use Codeigniter\Controller;

class Home extends BaseController
{

	public function hlavni()
	{
		$this->ionAuth = new \IonAuth\Libraries\IonAuth();
		if(!$this->ionAuth->loggedIn())echo view('head');
		else echo view ('prihlaseni');
		echo view("uvod");
	}
	public function index()
	{
		$this->ionAuth = new \IonAuth\Libraries\IonAuth(); 
		if(!$this->ionAuth->loggedIn())echo view('head');
		elseif($this->ionAuth->loggedIn() && $this->ionAuth->isAdmin())echo view('prihlaseni');
		else echo view('prihlaseni');
		echo view('uvod');
		
	}
	public function vypisAut()
	{
		$model = new Hlavnimodel();
		$data['auta'] = $model->findAll();
		

		echo view('prihlaseni');
		echo view('vypisaut', $data);
		
	}
	public function vypisZamestnancu()
	{
		$model = new Zamestnanci();
		$data['zamestnanci'] = $model->findAll();
		

		echo view('prihlaseni');
		echo view('Zamestnanci', $data);
		
	}
	public function vypisDilu()
	{
		$model = new Dily();
		$data['dily'] = $model->findAll();
		

		echo view('prihlaseni');
		echo view('dily', $data);
		
	}
	public function vypisZakazniku()
	{
		$model = new Zakaznici();
		$data['majitele'] = $model->findAll();
		

		echo view('prihlaseni');
		echo view('Zakaznici', $data);
		
	}
	public function zapis()
	{
		$data = ['vyrobce' => $this->request->getVar('vyrobce'),
				'typ_vozu' => $this->request->getVar('typ_vozu'),
				'registracni_znacka' => $this->request->getVar('registranci_znacka'),
				'rok_vyroby' => $this->request->getVar('rok_vyroby'),
				'obsah_motoru' => $this->request->getVar('obsah_motoru'),
				'prevodovka' => $this->request->getVar('prevodovka')];
				$model = new Hlavnimodel();
				$model->insert($data);

			echo view('prihlaseni');
			echo view('polozka');
			
	
	

	}
	public function form()
	{
		echo view('prihlaseni');
		echo view('objednavka');
		
	}
}

