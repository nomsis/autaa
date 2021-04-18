<?php
namespace App\Controllers;
use App\Models\Hlavnimodel;
use App\Models\Dily;
use App\Models\Zakaznici;
use App\Models\Zamestnanci;
use App\Models\Opravy;
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

	public function vypisOpravy()
	{
		$model = new Opravy();
		$data['opravy'] = $model->findAll();
		

		echo view('prihlaseni');
		echo view('opravy', $data);
		
	}
	public function upravaDilu($id = null){
		$nahradni_dily = new Dily();
		$data['nahradni_dily'] = $nahradni_dily->find($id);
		$this->ionAuth = new \IonAuth\Libraries\IonAuth(); 
		if(!$this->ionAuth->loggedIn())echo view('head');
		else echo view('prihlaseni');
		return view('upravaDilu', $data);
	}

	public function zapsatDil(){
		$nahradni_dily = new Dily();
		$data = [
			'nazev' => $this->request->getPost('nazev'),
			'cena' => $this->request->getPost('cena'),
			'sklad' => $this->request->getPost('sklad'),
	

		];
		$nahradni_dily->save($data);
		return redirect()->to(base_url('dily'));
	
	}
		
	public function zapsatUpravuDilu($id = null){
		$nahradni_dily = new Dily();
		$data = [
			'nazev' => $this->request->getPost('nazev'),
			'cena' => $this->request->getPost('cena'),
			'sklad' => $this->request->getPost('sklad'),


		];
		$nahradni_dily->update($id, $data);
		return redirect()->to(base_url('dily'));
	}

	public function pridatDil(){
		$this->ionAuth = new \IonAuth\Libraries\IonAuth(); 
		if(!$this->ionAuth->loggedIn())echo view('head');
		else echo view('prihlaseni');
		echo view('pridatDil');

		}
		
		public function smazatDil($id = null){
			$nahradni_dily = new Dily();
			$nahradni_dily->delete($id);
			return redirect()->to(base_url('dily'));
		}
		
		public function upravaZakaznika($id = null){
			$majitele = new Zakaznici();
			$data['majitele'] = $majitele->find($id);
			$this->ionAuth = new \IonAuth\Libraries\IonAuth(); 
			if(!$this->ionAuth->loggedIn())echo view('head');
			else echo view('prihlaseni');
			return view('upravaZakaznika', $data);
		}
		
		public function zapsatZakaznika(){
			$majitele = new Zakaznici();
			$data = [
				'jmeno' => $this->request->getPost('jmeno'),
				'prijmeni' => $this->request->getPost('prijmeni'),
				'adresa' => $this->request->getPost('adresa'),
				'telefon' => $this->request->getPost('telefon'),
				'email' => $this->request->getPost('email'),
				'idmajitele' => $this->request->getPost('idmajitele'),
		
	
			];
			$majitele->save($data);
			return redirect()->to(base_url('Zakaznici'));
		
		}
		public function zapsatUpravuZakaznika($id = null){
			$majitele = new Zakaznici();
			$data = [
				'jmeno' => $this->request->getPost('jmeno'),
				'prijmeni' => $this->request->getPost('prijmeni'),
				'adresa' => $this->request->getPost('adresa'),
				'telefon' => $this->request->getPost('telefon'),
				'email' => $this->request->getPost('email'),
				'idmajitele' => $this->request->getPost('idmajitele'),
	
	
			];
			$majitele->update($id, $data);
			return redirect()->to(base_url('Zakaznici'));
		}
	
		public function pridatZakaznika(){
			$this->ionAuth = new \IonAuth\Libraries\IonAuth(); 
			if(!$this->ionAuth->loggedIn())echo view('head');
			else echo view('prihlaseni');
			echo view('pridatZakaznika');
	
			}
			
			public function smazatZakaznika($id = null){
				$majitele = new Zakaznici();
				$majitele->delete($id);
				return redirect()->to(base_url('Zakaznici'));
			}
			
			public function upravaZamestnance($id = null){
				$zamestnanci = new Zamestnanci();
				$data['zamestnanci'] = $zamestnanci->find($id);
				$this->ionAuth = new \IonAuth\Libraries\IonAuth(); 
				if(!$this->ionAuth->loggedIn())echo view('head');
				else echo view('prihlaseni');
				return view('upravaZamestnance', $data);
			}
			
			public function zapsatZamestnance(){
				$zamestnanci = new Zamestnanci();
				$data = [
					'jmeno' => $this->request->getPost('jmeno'),
					'prijmeni' => $this->request->getPost('prijmeni'),
					'osobnicislo' => $this->request->getPost('osobnicislo'),
				
			
		
				];
				$zamestnanci->save($data);
				return redirect()->to(base_url('Zamestnanci'));
			
			}
			public function zapsatUpravuZamestnance($id = null){
				$zamestnanci = new Zamestnanci();
				$data = [
					'jmeno' => $this->request->getPost('jmeno'),
					'prijmeni' => $this->request->getPost('prijmeni'),
					'osobnicislo' => $this->request->getPost('osobnicislo'),
		
		
				];
				$zamestnanci->update($id, $data);
				return redirect()->to(base_url('Zamestnanci'));
			}
		
			public function pridatZamestnance(){
				$this->ionAuth = new \IonAuth\Libraries\IonAuth(); 
				if(!$this->ionAuth->loggedIn())echo view('head');
				else echo view('prihlaseni');
				echo view('pridatZamestnance');
		
				}
				
				public function smazatZamestnance($id = null){
					$zamestnanci = new Zamestnanci();
					$zamestnanci->delete($id);
					return redirect()->to(base_url('Zamestnanci'));
				}

				public function upravaOpravy($id = null){
					$opravy = new Opravy();
					$data['opravy'] = $opravy->find($id);
					$this->ionAuth = new \IonAuth\Libraries\IonAuth(); 
					if(!$this->ionAuth->loggedIn())echo view('head');
					else echo view('prihlaseni');
					return view('upravaOpravy', $data);
				}
				
				public function zapsatOpravy(){
					$opravy = new Opravy();
					$data = [
						'automobily_idautomobily' => $this->request->getPost('automobily_idautomobily'),
						'zamestnanci_osobnicislo' => $this->request->getPost('zamestnanci_osobnicislo'),
						'nahradni_dily_iddilu' => $this->request->getPost('nahradni_dily_iddilu'),
					
				
			
					];
					$opravy->save($data);
					return redirect()->to(base_url('opravy'));
				
				}
				public function zapsatUpravuOpravy($id = null){
					$opravy = new Opravy();
					$data = [
						'automobily_idautomobily' => $this->request->getPost('automobily_idautomobily'),
						'zamestnanci_osobnicislo' => $this->request->getPost('zamestnanci_osobnicislo'),
						'nahradni_dily_iddilu' => $this->request->getPost('nahradni_dily_iddilu'),
			
			
					];
					$opravy->update($id, $data);
					return redirect()->to(base_url('opravy'));
				}
			
				public function pridatOpravu(){
					$this->ionAuth = new \IonAuth\Libraries\IonAuth(); 
					if(!$this->ionAuth->loggedIn())echo view('head');
					else echo view('prihlaseni');
					echo view('pridatOpravu');
			
					}
					
					public function smazatOpravu($id = null){
						$opravy = new Opravy();
						$opravy->delete($id);
						return redirect()->to(base_url('opravy'));
					}

			}

?>
